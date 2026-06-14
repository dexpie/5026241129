@extends('template2')
@section('title', 'PR 3 - Nilai Kuliah')
@section('konten')

    @php
        function konversiNilaiHuruf($nilaiAngka)
        {
            if ($nilaiAngka <= 40) {
                return 'D';
            }

            if ($nilaiAngka <= 60) {
                return 'C';
            }

            if ($nilaiAngka <= 80) {
                return 'B';
            }

            return 'A';
        }
    @endphp

    <h2 class="mt-3">Data Nilai Kuliah</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('nilaikuliah.tambah') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse ($nilaikuliah as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->NRP }}</td>
                <td>{{ $item->NilaiAngka }}</td>
                <td>{{ $item->SKS }}</td>
                <td>{{ konversiNilaiHuruf($item->NilaiAngka) }}</td>
                <td>{{ $item->NilaiAngka * $item->SKS }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data nilai kuliah.</td>
            </tr>
        @endforelse
    </table>

@endsection
