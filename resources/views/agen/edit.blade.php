@extends('template2')
@section('title', 'Pra EAS - Edit Agen')
@section('konten')

    <h2 class="mt-3">Edit Agen</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('agen.update') }}" method="POST" onsubmit="return validasiFormAgen()">
        @csrf
        <input type="hidden" name="kodeagen" value="{{ $agen->kodeagen }}">

        <div class="mb-3">
            <label class="form-label">Kode Agen</label>
            <input type="text" class="form-control" value="{{ $agen->kodeagen }}" readonly>
        </div>

        <div class="mb-3">
            <label for="namaagen" class="form-label">Nama Agen</label>
            <input type="text" name="namaagen" id="namaagen" class="form-control" maxlength="30"
                value="{{ old('namaagen', $agen->namaagen) }}">
        </div>

        <div class="mb-3">
            <label for="jumlahagen" class="form-label">Jumlah Agen</label>
            <input type="number" name="jumlahagen" id="jumlahagen" class="form-control" min="0"
                value="{{ old('jumlahagen', $agen->jumlahagen) }}">
        </div>

        <div class="mb-3">
            <label for="tersedia" class="form-label">Tersedia</label>
            <input type="text" name="tersedia" id="tersedia" class="form-control" maxlength="1"
                value="{{ old('tersedia', $agen->tersedia) }}" placeholder="Y / N">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('agen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

    <script>
        function validasiFormAgen() {
            const namaagen = document.getElementById('namaagen').value.trim();
            const jumlahagen = document.getElementById('jumlahagen').value.trim();
            const tersedia = document.getElementById('tersedia').value.trim().toUpperCase();

            if (namaagen === '') {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Nama agen wajib diisi',
                    icon: 'error'
                });
                return false;
            }

            if (namaagen.length > 30) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Nama agen maksimal 30 karakter',
                    icon: 'error'
                });
                return false;
            }

            if (jumlahagen === '') {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Jumlah agen wajib diisi',
                    icon: 'error'
                });
                return false;
            }

            if (Number(jumlahagen) < 0) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Jumlah agen tidak boleh negatif',
                    icon: 'error'
                });
                return false;
            }

            if (tersedia === '') {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Status tersedia wajib diisi',
                    icon: 'error'
                });
                return false;
            }

            if (!['Y', 'N'].includes(tersedia)) {
                Swal.fire({
                    title: 'Kesalahan Input Data!',
                    text: 'Status tersedia hanya boleh Y atau N',
                    icon: 'error'
                });
                return false;
            }

            document.getElementById('tersedia').value = tersedia;
            return true;
        }
    </script>

@endsection
