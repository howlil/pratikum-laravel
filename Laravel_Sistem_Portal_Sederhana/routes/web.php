<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahKontroller;
use App\Http\Controllers\KrsController;


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


Route::get('/study/{krs}/detail',[KrsController::class, 'show']);
Route::post('/study/{krs}/tambah',[KrsController::class, 'store_mhs']);
Route::delete('/study/{id_krs}/{nim_mhs}/hapus',[KrsController::class, 'destroy_mhs']);
Route::get('/study',[KrsController::class,'index']);
Route::post('/study/tambah',[KrsController::class,'store']);

Route::get('/matkul',[MataKuliahKontroller::class, 'index']);

Route::get('/mahasiswa', [MahasiswaController::class , 'index']);
Route::post('/mahasiswa/tambah', [MahasiswaController::class , 'store']);
Route::delete('/mahasiswa/{mahasiswa}/hapus', [MahasiswaController::class , 'destroy']);





