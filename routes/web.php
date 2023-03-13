<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HistoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//management kelas
Route::get('/kelas/index', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas/create', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/update/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::post('/kelas/update/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::get('/kelas/delete{id}', [KelasController::class, 'destroy'])->name('kelas.delete');

//management spp
Route::get('/spp/index', [SPPController::class, 'index'])->name('spp.index');
Route::get('/spp/create', [SPPController::class, 'create'])->name('spp.create');
Route::post('/spp/create', [SPPController::class, 'store'])->name('spp.store');
Route::get('/spp/update/{id_spp}', [SPPController::class, 'edit'])->name('spp.edit');
Route::post('/spp/update/{id}', [SPPController::class, 'update'])->name('spp.update');
Route::get('/spp/delete{id}', [SPPController::class, 'destroy'])->name('spp.delete');

//management siswa
Route::get('/siswa/index', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/create', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/update/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::get('/siswa/delete{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

//management petugas
Route::get('/petugas/index', [PetugasController::class, 'index'])->name('petugas.index');
Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
Route::post('/petugas/create', [PetugasController::class, 'store'])->name('petugas.store');
Route::get('/petugas/update/{id}', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::post('/petugas/update/{id}', [PetugasController::class, 'update'])->name('petugas.update');
Route::get('/petugas/delete{id}', [PetugasController::class, 'destroy'])->name('petugas.delete');

//management pembayaran
Route::get('/pembayaran/index', [PembayaranController::class, 'index'])->name('pembayaran.index');
Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('/pembayaran/create', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/update/{id}', [PembayaranController::class, 'edit'])->name('pembayaran.edit');
Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');
Route::get('/pembayaran/delete{id}', [PembayaranController::class, 'destroy'])->name('pembayaran.delete');

//generate laporan
Route::get('/laporan/index', [LaporanController::class, 'index'])->name('laporan.index');

//history
Route::get('/history/index', [HistoryController::class, 'index'])->name('history.index');