<?php

use App\Http\Controllers\DashboarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RekrutmenController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\BujpController;

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

Route::get('/', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authentication']);


Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/rekrutmen', [RekrutmenController::class, 'index']);
Route::get('/entry-rekrutmen', [RekrutmenController::class, 'entry']);
Route::post('/entry-rekrutmen', [RekrutmenController::class, 'store']);

Route::get('/stakeholder', [StakeholderController::class, 'index']);
Route::get('/entry-stakeholder', [StakeholderController::class, 'entry']);
Route::post('/entry-stakeholder', [StakeholderController::class, 'store']);

Route::get('/bujp', [BujpController::class, 'index']);
Route::get('/entry-bujp', [BujpController::class, 'entry']);
Route::post('/entry-bujp', [BujpController::class, 'store']);
Route::get('/findtelpkantor', [BujpController::class, 'findtelpkantor']);

route::get('/{id}/kontrak',[BujpController::class, 'entry_kontrak']);
route::get('/store-kontrak',[BujpController::class, 'store_kontrak']);


Route::get('/penilaian-tahunan', function () {
    return view('data-penilaian-tahunan');
});

Route::get('/boq', function () {
    return view('data-boq');
});

Route::get('/form-kontrol', function () {
    return view('data-form-kontrol');
});

Route::get('/standarisasi-kompetensi', function () {
    return view('standarisasi-kompetensi');
});

Route::get('/standarisasi-promosi', function () {
    return view('standarisasi-promosi');
});

Route::get('/standarisasi-rekrutmen', function () {
    return view('standarisasi-rekrutmen');
});

Route::get('/standarisasi-proses-tagihan', function () {
    return view('standarisasi-proses-tagihan');
});
Route::get('/tambah-kontrol-bulanan', function () {
    return view('entry-form-kontrol');
});
Route::get('/tambah-penilaian-tahunan', function () {
    return view('entry-penilaian-tahunan');
});
Route::get('/form-jabatan-security', function () {
    return view('form-jabatan-security');
});
Route::get('/form-promosi-jabatan', function () {
    return view('form-promosi-jabatan');
});
