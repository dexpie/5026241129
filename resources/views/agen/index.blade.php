@extends('template2')
@section('title', 'Pra EAS - Data Agen')
@section('konten')

    <h2 class="mt-3">Data Agen</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('agen.tambah') }}" class="btn btn-primary">Tambah Agen</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Agen</th>
            <th>Nama Agen</th>
            <th>Jumlah Agen</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse ($agen as $item)
            <tr>
                <td>{{ $item->kodeagen }}</td>
                <td>{{ $item->namaagen }}</td>
                <td>{{ $item->jumlahagen }}</td>
                <td>{{ $item->tersedia }}</td>
                <td>
                    <a href="{{ route('agen.edit', $item->kodeagen) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('agen.hapus', $item->kodeagen) }}" class="btn btn-danger"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data agen.</td>
            </tr>
        @endforelse
    </table>

@endsection
