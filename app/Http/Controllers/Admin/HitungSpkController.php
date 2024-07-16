<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\Quisioner;
use Illuminate\Http\Request;
use App\Models\HasilPerhitungan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HitungSpkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Halaman Perhitungan';

        $datatabel = Vendor::with('quisioners')
            ->whereHas('quisioners')
            ->get();
        
        $vendors = DB::table('vendors as a')
            ->join('penampung_quisioner as b', 'a.id', '=', 'b.id_vendor')
            ->join('categorys as c', 'c.id', '=', 'b.id_categorys')
            ->select(
                'a.id',
                'a.name',
                DB::raw('MAX(CASE WHEN c.name = "General Information" THEN b.Nilai ELSE NULL END) AS `C1`'),
                DB::raw('MAX(CASE WHEN c.name = "Price" THEN b.Nilai ELSE NULL END) AS `C2`'),
                DB::raw('MAX(CASE WHEN c.name = "Quality Control" THEN b.Nilai ELSE NULL END) AS `C3`'),
                DB::raw('MAX(CASE WHEN c.name = "Transaction" THEN b.Nilai ELSE NULL END) AS `C4`'),
                DB::raw('MAX(CASE WHEN c.name = "Payment" THEN b.Nilai ELSE NULL END) AS `C5`')
            )
            ->groupBy('a.id', 'a.name')
            ->get();
        // $datatabel = Quisioner::with('vendors','categorys')->get();

        // dd(
        //     $datatabel,
        // );

        return view('admin.perhitungan.index', compact('title', 'datatabel', 'vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataArray = [];
        $dataArray = $request->cbperhitungan;
        $noIndex = 0;
        $ibagi = 0;
        $tampungNilaiBobotCategory = [];
        $hasilquisioner = [];
        $tampungNilai = [];
        $tampungIdVendor = [];
        $totalBobot = 0;
        $tampungHasilS = [];


        // mencari data vendor
        foreach ($dataArray as $key => $dataidvendor) {

            if (isset($dataArray[$key])) {


                $datavendor = Vendor::where('id', '=', $dataidvendor)
                    ->with('quisioners')
                    ->whereHas('quisioners')
                    ->get();

                $hasilquisioner[] = $datavendor;

                // Ambil data kategori
                foreach ($datavendor[0]->quisioners as $dataquisioner) {
                    $dataBobot = Category::where('id', '=', $dataquisioner->id_categorys)
                        ->get();
                    $tampungNilaiBobotCategory[] = $dataBobot;
                    $tampungNilai[] = $dataquisioner->nilai;
                    $tampungIdVendor[] = $dataquisioner->id_vendor;
                }

                $noIndex++;
            }
        }

        // Menghitung jumlah bobot kriteria
        foreach ($tampungNilaiBobotCategory as $bobotCollection) {
            foreach ($bobotCollection as $bobot) {

                $penampungbobot = (int)$bobot->bobot;
                $totalBobot += (int)$bobot->bobot;
                $total = $totalBobot / $noIndex;
            }
        }

        // Hitung Bobot Kepentingan

        foreach ($tampungNilaiBobotCategory as $bobotCollection) {

            foreach ($bobotCollection as $datakategori) {
                // Access the desired column value, e.g., 'nama_kategori'
                $hasilbagi = (int)$datakategori->bobot / $total;
                if ($datakategori->benefit == 1) {
                    $pangkat = $hasilbagi * 1;
                } else {
                    $pangkat = $hasilbagi * -1;
                }
                $tampungPangkat[] = $pangkat;
                // menampung bobot kepentingan
            }
        }

        // perhitungan Weighted produk Untuk menari Alternatif S
        $count = 0;
        $angka = 1;
        $tampungAlternativ = [];
        $jumlah = -0;
        foreach ($dataArray as $key => $dataidvendor) {

            if (isset($dataArray[$key])) {
                $angka = 1;

                $datavendor = Vendor::where('id', '=', $dataidvendor)
                    ->with('quisioners')
                    ->whereHas('quisioners')
                    ->get();

                $hasilquisioner[] = $datavendor;

                // Ambil data kategori
                foreach ($datavendor[0]->quisioners as $dataquisioner) {
                    $nilai = $dataquisioner->nilai;

                    $hasilPerhitungan = pow($nilai, $tampungPangkat[$count]);
                    echo 'id vandor  = ' . $dataquisioner->id_vendor . '   id kategori = ' . $dataquisioner->id_categorys .
                        '  Nilainy : ' . $dataquisioner->nilai . '  di pangkat : ' . $tampungPangkat[$count] .
                        '  Hasilnya : ' . $hasilPerhitungan . '<br>';

                    // Baru nanti disini perhitungannya
                    $angka *= (float)$hasilPerhitungan;
                    $count++;
                }

                $tampungAlternativ[] = $angka;
                $jumlah += $angka;

                echo 'Hasil Alternativ S : ' . $angka;
                echo '<br> ====Pemisah===== <br> <br>';

                //echo 'Id vendor = '. $dataidvendor;
                $noIndex++;
            }
        }

        echo  '  Jumlah = ' . $jumlah;
        // Perhitungan Weighted Product Untuk Mencari Alternativ V dan Rangking
        $jumlahAlternativ = 0;
        $subtotal = [];
        foreach ($tampungAlternativ as $key => $value) {
            $subtotal[] = (float) $value / $jumlah;
            echo '<br>================= <br>' . $value . ' di bagi  ' . $jumlah . '  =  ' . $subtotal[$key] . '<br>================= <br>';

            $jumlahAlternativ += $subtotal[$key];
        }
        echo '<br>' . $jumlahAlternativ;

        // Masukkan data pada tabel hasil perhitungan
        $today = Carbon::today();
        foreach ($dataArray as $key => $dataidvendor) {

            if (isset($dataArray[$key])) {
                // HasilPerhitungan::create(
                //     [
                //         'id_periode' => $today->format('d m Y'),
                //         'id_vendor' => $dataArray[$key],
                //         'nilai'=> $subtotal[$key],
                //     ]
                // );

            }
        }
        $id_periode = HasilPerhitungan::orderBy('id_periode', 'desc')->limit(1)->get();

        $id_angka = (empty($id_periode[0]->id_periode) ? 0 : $id_periode[0]->id_periode);
        $id_angka++;

        for ($i = 0; $i < count($dataArray); $i++) {
            //select id periode


            DB::table('hasil_perhitungan')->insert(
                [
                    'id_periode' => $id_angka,
                    'id_vendor' => $dataArray[$i],
                    'nilai' => $subtotal[$i],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }







        dd(
            // $datavendor,
            // $datavendor[0]->quisioners,
            // $dataBobot,
            // $tampungNilaiBobotCategory,
            // $tampungPangkat,
            // $tampungNilai,
            // $tampungAlternativ,
            $subtotal,

        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
