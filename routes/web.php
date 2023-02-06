<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
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

Route::prefix('guru')->group(function(){
    Route::get('/index',[GuruController::class, 'index']);
    Route::get('/create',[GuruController::class, 'create']);
    Route::post('/store',[GuruController::class, 'store']);
    Route::get('/edit/{guru}',[GuruController::class, 'edit']);
    Route::post('/update/{guru}',[GuruController::class, 'update']);
    Route::get('/destroy/{guru}',[GuruController::class, 'destroy']);
});
Route::prefix('jurusan')->group(function(){
    Route::get('/index',[JurusanController::class, 'index']);
    Route::get('/create',[JurusanController::class, 'create']);
    Route::post('/store',[JurusanController::class, 'store']);
    Route::get('/edit/{jurusan}',[JurusanController::class, 'edit']);
    Route::post('/update/{jurusan}',[JurusanController::class, 'update']);
    Route::get('/destroy/{jurusan}',[JurusanController::class, 'destroy']);
});
