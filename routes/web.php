<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('login.login');
// });
Route::get('/', function () {
    return view('dashboard.dashboard', [
        'title' => 'Dashboard',
    ]);
});
Route::get('/daftar-warga', function () {
    return view('daftar-warga.daftar-warga', [
        'title' => 'Daftar Warga',
    ]);
});
Route::get('/detail-warga', function () {
    return view('daftar-warga.detail-warga', [
        'title' => 'Daftar Warga',
    ]);
});
Route::get('/kelahiran', function () {
    return view('kelahiran.kelahiran', [
        'title' => 'Kelahiran',
    ]);
});
Route::get('/kematian', function () {
    return view('kematian.kematian', [
        'title' => 'Kematian',
    ]);
});
Route::get('/pindah-domisili', function () {
    return view('pindah-domisili.pindah-domisili', [
        'title' => 'Pindah Domisili',
    ]);
});
