<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Category;
use App\Models\Quisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuisionerController extends Controller
{
    public function index(Request $request)
    {

        $id_vendor = $request->id;
        $title = "Quisioner SPK";
        // $soal = DB::table('soal')
        //     ->leftJoin('categorys', 'categorys.id', '=', 'soal.id_categorys')
        //     ->select('soal.*', 'categorys.name')
        //     ->orderBy('id_categorys','asc')
        //     ->get();

        // $soal = Category::with("soals")
        // ->withhas("soals")
        // ->get();
        $category = Category::all();

        $soal = Category::with('soals.jawaban')->get();

        // $nomor = $soal->soals->jawaban->map(function ($soal, $i) {
        //     $soal->nomor = $i + 1;
        //     return $soal;
        // });

        $soal->each(function ($category, $index) {
            $category->nomor = $index + 1;
            $category->soals->each(function ($soal, $index) {
                $soal->nomor = $index + 1;
            });
        });

        // dd(
        //     $soal,
        //     $category,
        // );

        return view("admin.quisioner.create", compact(
            'title',
            'category',
            'soal',
            'id_vendor'
        ));
    }

    public function store(Request $request)
    {

        $input = $request->all();

        $radioValues = [];
        $soalCount = [];
        $id_vendor = $request->id_vendor;

        foreach ($input as $key => $value) {
            if (strpos($key, 'radio') === 0) {
                // Memproses input radio button
                list($prefix, $categoryNumber, $soalNumber) = explode('_', $key);

                $categoryKey = 'id_kategori' . $categoryNumber . $soalNumber;
                $soalKey = 'id_soal' . $categoryNumber . $soalNumber;


                $categoryId = $input[$categoryKey];
                $soalId = $input[$soalKey];

                // echo''. $categoryId .''. $soalId . $value .'<br>';

                //echo 'insert id_kategori : ' . $categoryId . ', id_pertanyaan : ' . $soalId . ', bobot : ' . $value . '<br>';

                // Lakukan sesuatu dengan data yang diperoleh
                // Misalnya, menyimpan jawaban ke database
                // Jawaban::create([
                //     'category_id' => $categoryId,
                //     'soal_id' => $soalId,
                //     'jawaban' => $value,
                // ]);

                $radioValues[$categoryId][$soalId] = $value;

                if (!isset($soalCount[$categoryId])) {
                    $soalCount[$categoryId] = 0;
                }
                $soalCount[$categoryId]++;
            }
        }

        $sumByCategory = [];
        foreach ($radioValues as $categoryId => $soals) {
            foreach ($soals as $soalId => $jawaban) {
                // Konversi jawaban ke integer jika perlu
                $jawabanValue = (int)$jawaban;

                // Lakukan penjumlahan
                if (!isset($sumByCategory[$categoryId])) {
                    $sumByCategory[$categoryId] = 0;
                }
                $sumByCategory[$categoryId] += $jawabanValue;
            }
        }

        // foreach ($sumByCategory as $categoryId => $sum) {
        //     echo "Kategori ID: $categoryId, Total Jawaban: $sum<br>";
        // }

        $averageByCategory = [];
        foreach ($sumByCategory as $categoryId => $sum) {
            $averageByCategory[$categoryId] = $sum / $soalCount[$categoryId];

            //echo "Kategori ID: $categoryId, dengan Id Vendor $id_vendor , Total Jawaban: $sum lalu di bagi dengan : $soalCount[$categoryId] dan hasilnya : $averageByCategory[$categoryId] <br>";
            // Quisioner::create(
            //     [
            //         'id_vendor' => (int)$id_vendor,
            //         'id_categorys' => (int)$categoryId,
            //         'bobot' => $averageByCategory[$categoryId],
            //     ]
            // );

            DB::table('penampung_quisioner')->insert(
                [
                    'id_vendor' => (int)$id_vendor,
                    'id_categorys' => (int)$categoryId,
                    'nilai' => $averageByCategory[$categoryId],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }

        // $kategori = Category::with('soals.jawaban')->get();
        // $i = 0;
        // $arrayoke = [];
        // $arraypert = [];
        // foreach($kategori as $kategori){
        //     $idkat = $kategori->id;
        //     $namakategori = $kategori->name;
        //     $soalpertama = null;
        //     foreach($kategori->soals as $soal){
        //         $soalpertama = $soal->pertanyaan;
        //         $arraypert[] = [
        //             'pertanyaan' => $soalpertama,
        //         ];
        //     }

        //     $arrayoke[] = [
        //         'idkategori' => $idkat,
        //         'kategori' => $namakategori,
        //         'pertanyaan'=> $soalpertama,
        //     ];
        // }

        // foreach($kategori->soals as $soal)
        // echo $soal->pertanyaan . "<br>";

        // $soal = Soal::all();
        // $jawaban = Jawaban::all();


        // $hasil = count($soal);

        // echo $hasil;


        // dd($input);
        
        return redirect()->route('perhitungan.index')->with('success', 'Jawaban Berhasil Diinputkan.');
    }

    public function show()
    {
    }
}
