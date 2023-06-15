<?php

use App\Http\Controllers\Novel;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//buat route untuk tampil data Novel
Route::get("/",[Novel::class,'index']);

//buat route untuk hapus data Novel
Route::delete("/delete/{parameter}",[Novel::class,'delete']);

//buat route untuk tambah data Novel
Route::get("/add",[Novel::class,'add']);
