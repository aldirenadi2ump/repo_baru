<?php

use App\Http\Controllers\BaptisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PernikahanController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\AnggotakeluarController;
use App\Http\Controllers\KematianController;
use App\Models\Baptis;
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



//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//Kelola Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/addadmin', [AdminController::class, 'addadmin'])->name('addadmin');
Route::post('/insertdata/admin', [AdminController::class, 'insertdata'])->name('admin.insertdata');
Route::get('/tampilkandata1/{id}', [AdminController::class, 'tampilkandata1'])->name('tampilkandata2');
Route::post('/updatedata1/{id}', [AdminController::class, 'updatedata1'])->name('updatedata1');
Route::get('/delete1/{id}', [AdminController::class, 'delete1'])->name('delete1');

//Baptis
Route::get('/baptis', [BaptisController::class, 'index'])->name('baptis')->middleware('auth');
Route::get('/addbaptis', [BaptisController::class, 'addbaptis'])->name('addbaptis');
Route::post('/insertdata/baptis', [BaptisController::class, 'insertdata'])->name('baptis.insertdata');
Route::get('/tampilkandata/baptis/{id}', [BaptisController::class, 'tampilkandata'])->name('baptis.tampilkandata');
Route::post('/updatedata/baptis/{id}', [BaptisController::class, 'updatedata'])->name('baptis.updatedata');
Route::get('/delete/baptis/{id}', [BaptisController::class, 'delete'])->name('baptis.delete');
//export PDF
Route::get('/exportpdf', [BaptisController::class, 'exportpdf'])->name('exportpdf');

//kelola Data Pernikahan
Route::get('/pernikahan', [PernikahanController::class, 'index'])->name('pernikahan')->middleware('auth');
Route::get('/addpernikahan', [PernikahanController::class, 'addpernikahan'])->name('addpernikahan');
Route::post('/insertdata/pernikahan', [PernikahanController::class, 'insertdata'])->name('pernikahan.insertdata');
Route::get('/tampilkandata/pernikahan/{id}', [PernikahanController::class, 'tampilkandata'])->name('pernikahan.tampilkandata');
Route::post('/updatedata/pernikahan/{id}', [PernikahanController::class, 'updatedata'])->name('pernikahan.updatedata');
Route::get('/delete/pernikahan/{id}', [PernikahanController::class, 'delete'])->name('pernikahan.delete');

//kelola data kematian
Route::get('/kematian', [KematianController::class, 'index'])->name('kematian')->middleware('auth');
Route::get('/addkematian', [KematianController::class, 'addkematian'])->name('addkematian');
Route::post('/insertdata/kematian', [KematianController::class, 'insertdata'])->name('kematian.insertdata');
Route::get('/tampilkandata/kematian/{id}', [KematianController::class, 'tampilkandata'])->name('kematian.tampilkandata');
Route::post('/updatedata/kematian/{id}', [KematianController::class, 'updatedata'])->name('kematian.updatedata');
Route::get('/delete/kematian/{id}', [KematianController::class, 'delete'])->name('kematian.delete');

//login auth
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//kelola data jemaat
Route::get('/jemaat', [JemaatController::class, 'index'])->name('jemaat')->middleware('auth');
Route::get('/tampilkandata/jemaat/{id}', [JemaatController::class, 'tampilkandata'])->name('jemaat.tampilkandata');
Route::post('/updatedata/jemaat/{id}', [JemaatController::class, 'updatedata'])->name('jemaat.updatedata');

//kelola anggota keluar
Route::get('/anggotakeluar', [AnggotakeluarController::class, 'index'])->name('anggotakeluar')->middleware('auth');
Route::get('/addanggotakeluar', [AnggotakeluarController::class, 'addanggotakeluar'])->name('addanggotakeluar');
Route::post('/insertdata/anggotakeluar', [AnggotakeluarController::class, 'insertdata'])->name('anggotakeluar.insertdata');
Route::get('/tampilkandata/anggotakeluar/{id}', [AnggotakeluarController::class, 'tampilkandata'])->name('anggotakeluar.tampilkandata');
Route::post('/updatedata/anggotakeluar/{id}', [AnggotakeluarController::class, 'updatedata'])->name('anggotakeluar.updatedata');
Route::get('/delete/anggotakeluar/{id}', [AnggotakeluarController::class, 'delete'])->name('anggotakeluar.delete');
