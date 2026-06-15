
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\easController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'beli']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaController::class, 'batal']);

Route::get('/agen', [AgenController::class, 'index'])->name('agen.index');
Route::get('/agen/tambah', [AgenController::class, 'tambah'])->name('agen.tambah');
Route::post('/agen/store', [AgenController::class, 'store'])->name('agen.store');
Route::get('/agen/edit/{kodeagen}', [AgenController::class, 'edit'])->name('agen.edit');
Route::post('/agen/update', [AgenController::class, 'update'])->name('agen.update');
Route::get('/agen/hapus/{kodeagen}', [AgenController::class, 'hapus'])->name('agen.hapus');

Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah'])->name('nilaikuliah.tambah');
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');

Route::get('/eas', [EasController::class, 'index'])->name('eas.index');
Route::get('/eas/tambah', [EasController::class, 'tambah'])->name('eas.tambah');
Route::post('/eas/store', [EasController::class, 'store'])->name('eas.store');

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('tugas', function () {
    return view('tugas-list');
});

Route::get('tugas/index', function () {
    return view('index');
});

Route::get('tugas/linktree', function () {
    return view('linktree');
});

Route::get('tugas/5026241129', function () {
    return view('5026241129');
});

Route::get('tugas/contoh', function () {
    return view('contoh');
});

Route::get('tugas/intro', function () {
    return view('intro');
});

Route::get('tugas/news', function () {
    return view('news');
});

Route::get('tugas/news1', function () {
    return view('news1');
});

Route::get('tugas/responsive', function () {
    return view('responsive');
});

Route::get('tugas/template', function () {
    return view('template');
});

Route::get('/template2', function () {
    return view('template2');
});
