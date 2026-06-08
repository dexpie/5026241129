@extends('template2')
@section('title', 'Beli Barang')
@section('konten')

    <h3>Beli Barang</h3>

    <form action="/keranjangbelanja/tambah" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control">
        </div>

        <div class="form-group">
            <label>Jumlah Pembelian</label>
            <input type="text" name="Jumlah" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga per item</label>
            <input type="text" name="Harga" class="form-control">
        </div>

        <br>

        <input type="submit" value="Simpan" class="btn btn-primary">
        <a href="/keranjangbelanja" class="btn btn-secondary">Kembali</a>
    </form>

@endsection
