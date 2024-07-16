<?php

namespace App\Http\Controllers\Admin;

use App\Models\Soal;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JawabanController extends Controller
{
    public function index(Request $request)
    {

        $title = "Master Jawaban";
        // $soal = DB::table('soal')->leftJoin('categorys', 'categorys.id', '=', 'soal.id_categorys')
        //     ->select('soal.*', 'categorys.name')->orderBy('id_categorys','asc')->get();

        $jawaban = Jawaban::with("soal")->where('id_pertanyaan', $request->id)->get();

        $nomor = $jawaban->map(function ($jawaban, $i) {
            $jawaban->nomor = $i + 1;
            return $jawaban;
        });

        $pertanyaan = Soal::find($request->id);

        $cekjawaban = Jawaban::where('id_pertanyaan',$request->id)->count();
        
        return view("admin.jawaban.index", [
            'title' => $title, 'listjawaban' => $jawaban, 'pertanyaan' => $pertanyaan , 'count' => $cekjawaban
        ]);
    }

    public function create(request $request)
    {
        $id_pertanyaan = $request->id_pertanyaan;

        return view('admin.jawaban.create', compact('id_pertanyaan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jawaban' => 'required|string',
            'nilai_bobot_jawaban' => 'required|int',
        ]);

        DB::table('jawabans')->insert(
            [
                'id_pertanyaan' => $request->id_pertanyaan,
                'jawaban' => $request->jawaban,
                'nilai_bobot_jawaban' => $request->nilai_bobot_jawaban
            ]
        );

        // return redirect()->to('admin/jawaban?id='. $request->id_pertanyaan)->with('success', 'Jawaban Berhasil Ditambahkan.');
        return redirect()->route('jawaban.index', [ 'id' => $request->id_pertanyaan ])->with('success', 'Jawaban Berhasil Ditambahkan.');
    }

    public function edit(Jawaban $jawaban)
    {
        return view('admin.jawaban.edit', compact('jawaban'));
    }

    public function update(Request $request, Jawaban $jawaban)
    {
        $request->validate([
            'jawaban' => 'required|string',
            'nilai_bobot_jawaban' => 'required|int',
        ]);

        $jawaban->update($request->all());

        return redirect()->to('admin/jawaban?id='. $request->id_pertanyaan)->with('success', 'Pertanyaan Berhasil di Update.');
    }


    public function destroy(Jawaban $jawaban)
    {
        $jawaban->delete();

        return redirect()->back()->with('success', 'Jawaban Berhasil Dihapus.');
    }
}
