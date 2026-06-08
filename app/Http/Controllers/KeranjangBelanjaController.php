<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja
        ]);
    }

    public function beli()
    {
        return view('keranjangbelanja.beli');
    }

    public function tambah(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect('/keranjangbelanja');
    }

    public function batal($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();

        return redirect('/keranjangbelanja');
    }
}
