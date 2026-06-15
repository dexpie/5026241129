@extends('template2')
@section('title', 'Kode Soal - Tambah Nilai Peserta')
@section('konten')

    <h2 class="mt-3">Tambah Data Nilai Peserta</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('eas.store') }}" method="POST" onsubmit="return validasiNilaiPeserta()">
        @csrf

        <div class="mb-3">
            <label for="nopeserta" class="form-label">No Peserta</label>
            <input type="text" name="nopeserta" id="nopeserta" class="form-control" maxlength="5"
                value="{{ old('nopeserta') }}">
        </div>

        <div class="mb-3">
            <label for="nilaiteori" class="form-label">Nilai Teori</label>
            <input type="text" name="nilaiteori" id="nilaiteori" class="form-control" value="{{ old('nilaiteori') }}">
        </div>

        <div class="mb-3">
            <label for="nilaipraktek" class="form-label">Nilai Praktek</label>
            <input type="text" name="nilaipraktek" id="nilaipraktek" class="form-control"
                value="{{ old('nilaipraktek') }}">
        </div>


        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('eas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

    <script>
        function validasiNilaiPeserta() {
            const nopeserta = document.getElementById('nopeserta').value.trim();
            const nilaiteori = document.getElementById('nilaiteori').value.trim();
            const nilaipraktek = document.getElementById('nilaipraktek').value.trim();

            if (nopeserta === '') {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'No Peserta wajib diisi',
                    icon: 'error'
                });
                return false;
            }

            if (nopeserta.length !== 5) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'No Peserta harus 5 karakter',
                    icon: 'error'
                });
                return false;
            }

            if (nilaiteori === '' || isNaN(nilaiteori)) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Nilai Teori wajib berupa angka',
                    icon: 'error'
                });
                return false;
            }

            if (Number(nilaiteori) < 0 || Number(nilaiteori) > 100) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Nilai Teori harus di antara 0 sampai 100',
                    icon: 'error'
                });
                return false;
            }

            if (nilaipraktek === '' || isNaN(nilaipraktek)) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Nilai Praktek wajib berupa angka',
                    icon: 'error'
                });
                return false;
            }

            if (Number(nilaipraktek) < 0 || Number(nilaipraktek) > 100) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Nilai Praktek harus di antara 0 sampai 100',
                    icon: 'error'
                });
                return false;
            }

            return true;
        }
    </script>

@endsection
