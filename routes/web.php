<?php

use App\mahasiswa;
use App\jurusan;
use App\dosen;
use App\matkul;
use App\matkul_mahasiswa;
use App\wali;

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
    return view('welcome');
});
Route::get('soal1', function() {
 		$dosen = dosen::with('mahasiswa')->get();
 		return View::make('soal1', compact('dosen'));
});
Route::get('soal2', function() {
 		$wali = wali::with('mahasiswa')->get();
 		return View::make('soal2', compact('wali'));
});
Route::get('soal3', function() {
 		$jurusan = jurusan::with('mahasiswa')->get();
 		return View::make('soal3', compact('jurusan'));
});
Route::get('bonus', function() {
 		$mahasiswa = mahasiswa::with('dosen', 'jurusan' ,'wali')->get();
 		return View::make('bonus', compact('mahasiswa'));
});
