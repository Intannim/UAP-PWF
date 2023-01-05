<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\ReadController;
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
    return view('home');
});

Route::group(['prefix' => 'dosen'], function(){
    Route::get('/profil1', [DosenController::class, 'index']);
    Route::get('/data_pengampu', [DosenController::class, 'index2']);
    Route::get('/profil', [ReadController::class, 'index']);
});
