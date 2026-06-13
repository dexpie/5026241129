<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->orderBy('ID')->get();

        return view('nilaikuliah.index', compact('nilaikuliah'));
    }

    public function tambah()
    {
        return view('nilaikuliah.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NRP' => 'required|string|size:6',
            'NilaiAngka' => 'required|integer|min:0|max:100',
            'SKS' => 'required|integer|min:0',
        ]);

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);

        return redirect('/nilaikuliah')->with('success', 'Data nilai kuliah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $nilaikuliah = DB::table('nilaikuliah')->where('ID', $id)->first();

        if (!$nilaikuliah) {
            abort(404);
        }

        return view('nilaikuliah.edit', compact('nilaikuliah'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'ID' => 'required|integer',
            'NRP' => 'required|string|size:6',
            'NilaiAngka' => 'required|integer|min:0|max:100',
            'SKS' => 'required|integer|min:0',
        ]);

        DB::table('nilaikuliah')->where('ID', $request->ID)->update([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);

        return redirect('/nilaikuliah')->with('success', 'Data nilai kuliah berhasil diupdate.');
    }

    public function hapus($id)
    {
        DB::table('nilaikuliah')->where('ID', $id)->delete();

        return redirect('/nilaikuliah')->with('success', 'Data nilai kuliah berhasil dihapus.');
    }
}
