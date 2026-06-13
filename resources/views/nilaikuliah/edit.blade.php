@extends('template2')
@section('title', 'PR 3 - Edit Nilai Kuliah')
@section('konten')

    <h2 class="mt-3">Edit Data Nilai Kuliah</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('nilaikuliah.update') }}" method="POST" onsubmit="return validasiNilaiKuliah()">
        @csrf
        <input type="hidden" name="ID" value="{{ $nilaikuliah->ID }}">

        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value="{{ $nilaikuliah->ID }}" readonly>
        </div>

        <div class="mb-3">
            <label for="NRP" class="form-label">NRP</label>
            <input type="text" name="NRP" id="NRP" class="form-control" maxlength="6"
                value="{{ old('NRP', $nilaikuliah->NRP) }}">
        </div>

        <div class="mb-3">
            <label for="NilaiAngka" class="form-label">Nilai Angka</label>
            <input type="text" name="NilaiAngka" id="NilaiAngka" class="form-control"
                value="{{ old('NilaiAngka', $nilaikuliah->NilaiAngka) }}">
        </div>

        <div class="mb-3">
            <label for="SKS" class="form-label">SKS</label>
            <input type="text" name="SKS" id="SKS" class="form-control"
                value="{{ old('SKS', $nilaikuliah->SKS) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('nilaikuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

    <script>
        function validasiNilaiKuliah() {
            const nrp = document.getElementById('NRP').value.trim();
            const nilaiAngka = document.getElementById('NilaiAngka').value.trim();
            const sks = document.getElementById('SKS').value.trim();

            if (nrp === '') {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'NRP wajib diisi',
                    icon: 'error'
                });
                return false;
            }

            if (nrp.length !== 6) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'NRP harus 6 karakter',
                    icon: 'error'
                });
                return false;
            }

            if (nilaiAngka === '' || isNaN(nilaiAngka)) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Nilai Angka wajib berupa angka',
                    icon: 'error'
                });
                return false;
            }

            if (Number(nilaiAngka) < 0 || Number(nilaiAngka) > 100) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Nilai Angka harus di antara 0 sampai 100',
                    icon: 'error'
                });
                return false;
            }

            if (sks === '' || isNaN(sks)) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'SKS wajib berupa angka',
                    icon: 'error'
                });
                return false;
            }

            if (Number(sks) < 0) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'SKS tidak boleh negatif',
                    icon: 'error'
                });
                return false;
            }

            return true;
        }
    </script>

@endsection
