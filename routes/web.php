<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1>di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan5', function () {
    return view('pertemuan5');
});

use App\Http\Controllers\DosenController;
Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('tugas', function () {
    return view('tugas-list'); });
Route::get('tugas/index', function () {
    return view('index'); });
Route::get('tugas/linktree', function () {
    return view('linktree'); });
Route::get('tugas/5026241129', function () {
    return view('5026241129'); });
Route::get('tugas/contoh', function () {
    return view('contoh'); });
Route::get('tugas/intro', function () {
    return view('intro'); });
Route::get('tugas/news', function () {
    return view('news'); });
Route::get('tugas/news1', function () {
    return view('news1'); });
Route::get('tugas/responsive', function () {
    return view('responsive'); });
Route::get('tugas/template', function () {
    return view('template'); });
