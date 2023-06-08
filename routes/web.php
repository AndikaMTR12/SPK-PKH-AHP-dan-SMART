<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\CpenerimaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenilaianController;

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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authLogin']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);
// Calon Penerima
Route::get('/calon-penerima', [CpenerimaController::class, 'index']);
Route::post('/calon-penerima', [CpenerimaController::class, 'tambah']);
Route::post('/calon-penerima/import', [CpenerimaController::class, 'upload']);
Route::get('/calon-penerima/{nik}/hapus', [CpenerimaController::class, 'hapus']);
Route::get('/calon-penerima/{nik}/edit', [CpenerimaController::class, 'edit']);
Route::put('/calon-penerima/{nik}', [CpenerimaController::class, 'update']);
// Data Kriteria
Route::get('/data-kriteria', [KriteriaController::class, 'index']);
Route::post('/data-kriteria', [KriteriaController::class, 'proses']);
// Penilaian
Route::get('/penilaian', [PenilaianController::class, 'index']);
