<?php

use App\Http\Controllers\Buku;
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

//buat route untuk tampil data Buku
Route::get("/",[Buku::class,'index']);

//buat route untuk hapus data Buku
Route::delete("/delete/{parameter}",[Buku::class,'delete']);

//buat route untuk tambah data Buku
Route::get("/add",[Buku::class,'add']);
