@extends('template2')
@section('title', 'Kode Soal - Nilai Peserta')
@section('konten')


    <h2 class="mt-3">Data Nilai Peserta</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('eas.tambah') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktek</th>
            <th>Rata-Rata</th>
            <th>Status</th>
        </tr>



        @forelse ($nilai_peserta as $item)
            @php
                $ratarata = ($item->nilaiteori + $item->nilaipraktek) / 2;
                $statuskelulusan = $ratarata >= 75 ? 'Lulus' : 'Gagal';
                $kelasstatus = $statuskelulusan === 'Lulus' ? 'bg-success text-white' : 'bg-danger text-white';

            @endphp
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nopeserta }}</td>
                <td>{{ $item->nilaiteori }}</td>
                <td>{{ $item->nilaipraktek }}</td>
                <td>{{ number_format($ratarata, 2) }}</td>
                <td class="{{ $kelasstatus }}">{{ $statuskelulusan }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data nilai peserta.</td>
            </tr>
        @endforelse
    </table>

@endsection
