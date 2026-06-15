<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasController extends Controller
{
    public function index()
    {
        $nilai_peserta = DB::table('nilai_peserta')->orderBy('id')->get();

        return view('eas.index', compact('nilai_peserta'));
    }

    public function tambah()
    {
        return view('eas.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nopeserta' => 'required|string|size:5',
            'nilaiteori' => 'required|integer|min:0|max:100',
            'nilaipraktek' => 'required|integer|min:0|max:100',
        ]);

        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek,
        ]);

        return redirect()->route('eas.index')->with('success', 'Data nilai peserta berhasil ditambahkan.');
    }
}
