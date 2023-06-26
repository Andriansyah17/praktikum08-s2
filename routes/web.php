<?php
namespace App\Http\Controllers;
use App\Http\Controllers\MerkController;
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
Route::get('/merk',[MerkController::class, 'index']);

Route::get('/merk/edit/{id}', [MerkController::class, 'formEdit']);
Route::post('/merk/update/{id}', [MerkController::class, 'update']);
Route::post('/merk/delete/{id}', [MerkController::class, 'delete']);

//pertemuan13
Route::get('/tipemobil',[TipeMobilController::class, 'index']);
Route::get('/tipemobil/create',[TipeMobilController::class, 'create']);
Route::post('/tipemobil/simpan-data',[TipeMobilController::class, 'store']);
Route::get('/tipemobil/edit/{id}',[TipeMobilController::class, 'formEdit']);
Route::get('/tipemobil/update/{id}',[TipeMobilController::class, 'update']);
Route::get('/tipemobil/delete/{id}',[TipeMobilController::class, 'delete']);

//pertemuan14
Route::get('/login',[Auth\LoginController::class,'index']);
Route::post('/login/proses',[Auth\LoginController::class,'login']);
Route::get('/register',[Auth\RegisterController::class,'index']);
Route::post('/register/proses',[Auth\RegisterController::class,'register']);
Route::get('/logout',[Auth\RegisterController::class,'register']);