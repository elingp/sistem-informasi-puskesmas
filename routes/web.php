<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/lihatInformasiNakes', function () {
    return view('layouts.nakes.lihatInformasi');
});
Route::get('/tambahInformasiNakes', function () {
    return view('layouts.nakes.tambahInformasi');
});
Route::get('/suntingInformasiNakes', function () {
    return view('layouts.nakes.suntingInformasi');
});
Route::get('/lihatInformasiPasien', function () {
    return view('layouts.Pasien.lihatInformasi');
});
Route::get('/tambahInformasiPasien', function () {
    return view('layouts.Pasien.tambahPasien');
});
Route::get('/suntingInformasiPasien', function () {
    return view('layouts.Pasien.suntingInformasi');
});
Route::get('/lihatInformasiPetugas', function () {
    return view('layouts.Petugas.lihatInformasi');
});
Route::get('/tambahInformasiPetugas', function () {
    return view('layouts.Petugas.tambahPetugas');
});
Route::get('/suntingInformasiPetugas', function () {
    return view('layouts.Petugas.suntingInformasi');
});