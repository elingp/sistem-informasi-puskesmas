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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/tenaga-kesehatan', function () {
    return view('layouts.nakes.index');
})->name('nakes.index');
Route::get('/tenaga-kesehatan/create', function () {
    return view('layouts.nakes.create');
})->name('nakes.create');
Route::get('/tenaga-kesehatan/edit', function () {
    return view('layouts.nakes.edit');
})->name('nakes.edit');

Route::get('/pasien', function () {
    return view('layouts.pasien.index');
})->name('pasien.index');
Route::get('/pasien/create', function () {
    return view('layouts.pasien.create');
})->name('pasien.create');
Route::get('/pasien/edit', function () {
    return view('layouts.pasien.edit');
})->name('pasien.edit');

Route::get('/petugas', function () {
    return view('layouts.petugas.index');
})->name('petugas.index');
Route::get('/petugas/create', function () {
    return view('layouts.petugas.create');
})->name('petugas.create');
Route::get('/petugas/edit', function () {
    return view('layouts.petugas.edit');
})->name('petugas.edit');
