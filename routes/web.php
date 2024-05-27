<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::auth();

Route::group(['middleware'=>'auth'], function() {
Route::get('/',[KelasController::class,'index']);
Route::get('kelas/add',[KelasController::class,'create']);
Route::post('kelas/add',[KelasController::class,'store']);

Route::get('kelas/{id}/edit', [KelasController::class,'edit']);
Route::patch('kelas/{id}/edit', [KelasController::class,'update']);
Route::delete('kelas/{id}/delete', [KelasController::class,'destroy']);

Route::get('siswa', [SiswaController::class,'index']);
Route::get('siswa/add',[SiswaController::class,'create']);
Route::post('siswa/add',[SiswaController::class,'store']);

Route::get('siswa/{id}/edit', [SiswaController::class,'edit']);
Route::patch('siswa/{id}/edit', [SiswaController::class,'update']);
Route::delete('siswa/{id}/delete', [SiswaController::class,'destroy']);

});