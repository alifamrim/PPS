<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa',  [App\Http\Controllers\MahasiswaSidang::class, 'index']);
Route::get('/mahasiswa/{id}',  [App\Http\Controllers\MahasiswaSidang::class, 'detail']);

Route::post('/mahasiswa/{id}',  [App\Http\Controllers\MahasiswaSidang::class, 'update']);
