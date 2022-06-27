<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController_past;
use App\Http\Controllers\FormKontrolController;
use App\Http\Controllers\PenilaianTahunanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RekrutmenController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\BujpController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

//Route::post('/login', [LoginController::class, 'authentication']);


Route::get('/dashboard', [HomeController::class, 'index']);


Route::get('/rekrutmen', [RekrutmenController::class, 'index']);
Route::get('/entry-rekrutmen', [RekrutmenController::class, 'entry']);
Route::post('/entry-rekrutmen', [RekrutmenController::class, 'store']);

Route::get('/stakeholder', [StakeholderController::class, 'index']);
Route::get('/entry-stakeholder', [StakeholderController::class, 'entry']);
Route::post('/entry-stakeholder', [StakeholderController::class, 'store']);
Route::get('/{id}/detail-stakeholder', [StakeholderController::class, 'detail']);
Route::get('/{id}/edit-stakeholder', [StakeholderController::class, 'edit']);
Route::post('/store-edit-stakeholder', [StakeholderController::class, 'store_edit']);
Route::get('/{id}/delete-stakeholder', [StakeholderController::class, 'destroy']);

Route::get('/bujp', [BujpController::class, 'index']);
Route::get('/entry-bujp', [BujpController::class, 'entry']);
Route::post('/entry-bujp', [BujpController::class, 'store']);

route::get('/{id}/kontrak',[BujpController::class, 'entry_kontrak']);
route::get('/store-kontrak',[BujpController::class, 'store_kontrak']);

Route::get('/form-kontrol', [FormKontrolController::class, 'index']);
Route::get('/tambah-kontrol-bulanan', [FormKontrolController::class, 'entry']);
Route::post('/tambah-kontrol-bulanan', [FormKontrolController::class, 'store']);


Route::get('/penilaian-tahunan', [PenilaianTahunanController::class, 'index']);
Route::get('/tambah-penilaian-tahunan', [PenilaianTahunanController::class, 'entry']);
Route::post('/tambah-penilaian-tahunan', [PenilaianTahunanController::class, 'store']);

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
Route::get('/form-jabatan-security', function () {
    return view('form-jabatan-security');
});
Route::get('/form-promosi-jabatan', function () {
    return view('form-promosi-jabatan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
