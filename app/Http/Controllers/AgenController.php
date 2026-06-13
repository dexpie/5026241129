<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenController extends Controller
{
    public function index()
    {
        $agen = DB::table('agen')->orderBy('kodeagen')->get();

        return view('agen.index', compact('agen'));
    }

    public function tambah()
    {
        return view('agen.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaagen' => 'required|string|max:30',
            'jumlahagen' => 'required|integer|min:0',
            'tersedia' => 'required|string|size:1',
        ]);

        DB::table('agen')->insert([
            'namaagen' => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia' => strtoupper($request->tersedia),
        ]);

        return redirect('/agen')->with('success', 'Data agen berhasil ditambahkan.');
    }

    public function edit($kodeagen)
    {
        $agen = DB::table('agen')->where('kodeagen', $kodeagen)->first();

        if (!$agen) {
            abort(404);
        }

        return view('agen.edit', compact('agen'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'kodeagen' => 'required|integer',
            'namaagen' => 'required|string|max:30',
            'jumlahagen' => 'required|integer|min:0',
            'tersedia' => 'required|string|size:1',
        ]);

        DB::table('agen')->where('kodeagen', $request->kodeagen)->update([
            'namaagen' => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia' => strtoupper($request->tersedia),
        ]);

        return redirect('/agen')->with('success', 'Data agen berhasil diupdate.');
    }

    public function hapus($kodeagen)
    {
        DB::table('agen')->where('kodeagen', $kodeagen)->delete();

        return redirect('/agen')->with('success', 'Data agen berhasil dihapus.');
    }
}
