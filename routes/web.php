<?php

use App\Http\Controllers\authenticated;
use App\Http\Controllers\CreateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Routes;

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

Route::get('/', [Routes::class, 'Login']);
Route::get('/Dashboard', [Routes::class, 'dashboard']);
Route::get('/Obat', [Routes::class, 'obat']);
Route::get('/Dokter', [Routes::class, 'dokter']);
Route::get('/Pasien', [Routes::class, 'pasien']);
Route::get('/Ruangan', [Routes::class, 'ruang']);
Route::get('/Rekam-Medis', [Routes::class, 'rekam_medis']);
# End Get
#1. Dashboard Login and Logout
Route::Post('/Dashboard', [Routes::class, 'Logout'])->name('logout');
Route::post('/', [authenticated::class, 'check_users'])->name('doPost');

#2 Obat
Route::get('/Obat/add',[Routes::class, 'add_obat'])->name("addObat");
Route::post('/Obat/add',[CreateController::class, 'AddObat'])->name("addingObat");

#3 Dokter
Route::get('/Dokter/add', [Routes::class, 'add_dokter'])->name('addDokter');
Route::post('/Dokter/add', [CreateController::class, 'AddDokter'])->name('addingDokter');
Route::post('/Dokter/edit', [CreateController::class]);

#4. Pasien
Route::get('/Pasien/add', [Routes::class, 'add_pasien'])->name('addPasien');
Route::post('/Pasien/add', [CreateController::class, 'AddPasien'])->name('addingPasien');

#5. Ruang
Route::get('/Ruangan/add', [Routes::class, 'add_ruang'])->name('addRuang');
Route::post('/Ruangan/add', [CreateController::class, 'AddRuangan'])->name('addingRuangan');

#6. Rekam-Medis
Route::get('/Rekam-Medis/add', [Routes::class, 'add_rekam_medis'])->name('addLaporan');
Route::post('/Rekam-medis/add', [CreateController::class, 'AddDokter'])->name('addingDokter');