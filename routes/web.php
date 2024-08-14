<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/cekobject', [AnggotaController::class, 'cekObject']);
Route::get('/insert', [AnggotaController::class, 'insert']);
Route::get('/update', [AnggotaController::class, 'update']);
Route::get('/delete', [AnggotaController::class, 'delete']);
Route::get('/all', [AnggotaController::class, 'all']);
Route::get('/find', [AnggotaController::class, 'find']);
Route::get('/getWhere', [AnggotaController::class, 'getWhere']);

