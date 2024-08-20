<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route\Get;


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

// Route::get('/home', function () {
//     return view('home');

    Route::get('/',[WelcomeController::class,'index']);
Route::group(['previx' =>'user'],function(){
Route::get('/', [UserController::class, 'index  ']);
Route::post('/list', [UserController::class, 'list']);
Route::get('/create', [UserController::class, 'create']);
Route::get('/', [UserController::class, 'store']);
Route::get('/{id}', [UserController::class, 'show']);
Route::get('/{id}/edit', [UserController::class, 'edit']);
Route::get('/{id}', [UserController::class, 'update']);
Route::get('/{id}', [UserController::class, 'destroy']);
    });
// });