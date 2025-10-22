<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/master-items', [App\Http\Controllers\MasterItemsController::class, 'index']);
Route::get('/master-items/search', [App\Http\Controllers\MasterItemsController::class, 'search']);
Route::get('/master-items/form/{method}/{id?}', [App\Http\Controllers\MasterItemsController::class, 'formView']);
Route::post('/master-items/form/{method}/{id?}', [App\Http\Controllers\MasterItemsController::class, 'formSubmit']);

Route::get('/master-items/view/{kode}', [App\Http\Controllers\MasterItemsController::class, 'singleView']);
Route::get('/master-items/delete/{id}', [App\Http\Controllers\MasterItemsController::class, 'delete']);


Route::get('/master-items/update-random-data', [App\Http\Controllers\MasterItemsController::class, 'updateRandomData']);

//pasien coba coba
Route::get('/master-pasien', [App\Http\Controllers\MasterPasienController::class, 'index']);
Route::get('/master-pasien/search', [App\Http\Controllers\MasterPasienController::class, 'search']);
Route::get('/master-pasien/form/{method}/{id?}', [App\Http\Controllers\MasterPasienController::class, 'formView']);
Route::post('/master-pasien/form/{method}/{id?}', [App\Http\Controllers\MasterPasienController::class, 'formSubmit']);
Route::get('/master-pasien/view/{kode}', [App\Http\Controllers\MasterPasienController::class, 'singleView']);
Route::get('/master-pasien/delete/{id}', [App\Http\Controllers\MasterPasienController::class, 'delete']);
Route::get('/master-pasien/update-random-data', [App\Http\Controllers\MasterPasienController::class, 'updateRandomData']);

Route::get('kategori', [App\Http\Controllers\KategoriItemController::class, 'index'])->name('kategori.index');
Route::get('kategori/form/{method}/{id?}', [App\Http\Controllers\KategoriItemController::class, 'formView']);
Route::post('kategori/form/{method}/{id?}', [App\Http\Controllers\KategoriItemController::class, 'formSubmit']);
Route::get('kategori/view/{id}', [App\Http\Controllers\KategoriItemController::class, 'view']);
Route::get('kategori/delete/{id}', [App\Http\Controllers\KategoriItemController::class, 'delete']);

