<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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
    return view('halamanAwal');
});

Route::get('/sidangProposal', function () {
    $response = Http::get('http://127.0.0.1:8000/api/mahasiswa');
    $sidang = json_decode($response->body());
    return view('daftarMahasiswaSidang', ['sidang' => $sidang]);
});

Route::get('/halamanSidang/{id}', function ($id) {
    $response = Http::get('http://127.0.0.1:8000/api/mahasiswa/' . $id);
    $sidang = json_decode($response->body());
    return view('halamanSidang', ['sidang' => $sidang, 'id' => $id]);
});

Route::post('/halamanSidang/{id}', function ($id) {
    $response = Http::post('http://127.0.0.1:8000/api/mahasiswa/' . $id, [
        'feedback' => request('feedback'),
        'nilai' => request('nilai'),
        'status' => request('status')
    ]);
    return redirect('/sidangProposal');
});
