<?php

namespace App\Http\Controllers\admin;

use App\Models\Soal;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SoalController extends Controller
{
    public function index()
    {

        $title = "Master Soal";
        $soal = DB::table('soal')->leftJoin('categorys', 'categorys.id', '=', 'soal.id_categorys')
            ->select('soal.*', 'categorys.name')->orderBy('id_categorys', 'asc')->get();

        $nomor = $soal->map(function ($soal, $i) {
            $soal->nomor = $i + 1;
            return $soal;
        });

        return view("admin.soal.index", [
            'title' => $title,
        ], compact('soal'));
    }

    public function create()
    {
        $option = DB::table('categorys')->select('id', 'name')->get();
        return view('admin.soal.create', compact('option'));
    }

    public function show(Soal $soal)
    {
        return view('admin.soal.show', compact('soal'));
    }

    public function edit(Soal $soal)
    {
        return view('admin.soal.edit', compact('soal'));
    }

    public function store(Request $request)
    {


        // DB::table('soal')->insert(
        //     [
        //         'id_categorys' => $request->kriteria,
        //         'pertanyaan' => $request->pertanyaan,
        //     ]
        // );

        $soal = Soal::create(
            [
                'id_categorys' => $request->kriteria,
                'pertanyaan' => $request->pertanyaan,
            ]
        );

        return redirect()->route('soal.index')->with('success', 'Soal berhasil Dibuat.');
    }
    public function update(Request $request, Soal $soal)
    {
        $request->validate([
            'pertanyaan' => 'required|string',
        ]);

        $soal->update($request->all());

        return redirect()->route('soal.index')->with('success', 'Pertanyaan Berhasil di Update.');
    }

    public function destroy(Soal $soal)
    {
        DB::table('soal')->where('id', '=', $soal->id)->delete();

        return redirect()->route('soal.index')->with('success', 'Soal Berhasil Dihapus.');
    }

    // public function jawaban(request $request)
    // {
    //     $id = $request->id;
    //     return  view('admin.jawaban.index', ['id' => $id]) ;
    // }


}
