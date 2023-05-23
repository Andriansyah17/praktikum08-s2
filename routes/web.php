<?php

use App\Http\Controllers\MobilController;
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
Route::get('/welcome', function(){
    echo "Selamat Datang di Laravel";
});
Route::get('/greeting', function(){
    return view('greeting');
});
Route::get('/mobil', function(){
    return view('index');
});

Route::get('/mobil', [App\Http\Controllers\MobilController::class,'index']);
Route::get('/mobil/create',[MobilController::class, 'create']);
Route::post('/mobil/store',[MobilController::class, 'store']);