<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Store\AdminController;
use App\Http\Controllers\Store\BiayaOperasionalController;
use App\Http\Controllers\Store\BiayaSewaController;
use App\Http\Controllers\Store\ProduktivitasController;
use App\Http\Controllers\Store\KebutuhanAlatController;
use App\Http\Controllers\Store\RekapitulasiController;
use App\Http\Controllers\Store\AlatBeratController;
use App\Http\Controllers\Store\KategoriBiayaOperasionalController;
use App\Http\Controllers\Store\KategoriBiayaSewaController;
use App\Http\Controllers\Store\KategoriProduktivitasController;
use App\Http\Controllers\Store\ParameterProduktivitasController;
use App\Http\Controllers\Store\ParameterKebutuhanAlatController;
use App\Http\Controllers\Auth\LoginController;



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
  return redirect('login');
});

Auth::routes();

Route::get('/admin',[AdminController::class, 'index']);
Route::get('/rekapitulasi',[RekapitulasiController::class, 'index']);
Route::get('/biaya-operasional',[BiayaOperasionalController::class, 'index']);
Route::get('/biaya-sewa',[BiayaSewaController::class, 'index']);
Route::get('/produktivitas',[ProduktivitasController::class, 'index']);
Route::get('/kebutuhan-alat',[KebutuhanAlatController::class, 'index']);
Route::get('/alat-berat',[AlatBeratController::class, 'index']);
Route::get('/kategori-biaya-operasional',[KategoriBiayaOperasionalController::class, 'index']);
Route::get('/kategori-biaya-sewa',[KategoriBiayaSewaController::class, 'index']);
Route::get('/kategori-produktivitas',[KategoriProduktivitasController::class, 'index']);
Route::get('/parameter-produktivitas',[ParameterProduktivitasController::class, 'index']);
Route::get('/parameter-kebutuhan-alat',[ParameterKebutuhanAlatController::class, 'index']);



/*admin */
Route::post('/create-admin',[AdminController::class, 'store'])->name('admin.store');
Route::get('/admins',[AdminController::class, 'listAdmin'])->name('admin.list');
Route::delete('/delete-admin/{id}',[AdminController::class, 'destroy'])->name('admin.destroy');
Route::put('/update-admin/{id}',[AdminController::class, 'update'])->name('admin.update');

Route::get('/home', function () {
  return redirect('/rekapitulasi');
});
