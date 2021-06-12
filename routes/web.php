<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
    return view('layouts.app');
});

Route::get('barang',[BarangController::class, 'index']);
Route::get('barang/create',[BarangController::class,'create']);
Route::post('barang/store',[BarangController::class,'store']);
Route::get('barang/{id}/edit',[BarangController::class,'edit']);
Route::put('barang/{id}',[BarangController::class,'update']);
Route::delete('barang/{id}',[BarangController::class,'destroy']);



