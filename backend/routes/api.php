<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Novel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//route untuk tampil data
Route::get('/view',[Novel::class,'view']);
Route::get('/detail/{parameter}',[Novel::class,'detail']);
// route untuk delete data
Route::delete('/delete/{parameter}',[Novel::class,'delete']);
Route::post('/insert',[Novel::class,'insert']);
Route::put('/update/{parameter}',[Novel::class,'update']);
