<?php

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
    return view('frontend/dashboard');
});

Route::get('dashboard','tabelharry@dashboard');

Route::get('about-us','tabelharry@about');

Route::get('our-project', 'tabelharry@project');

Route::get('tampilan','tabelharry@index');

Route::get('tampilan/our-project','tabelharry@tambah');
Route::post('tampilan/store','tabelharry@store');

Route::get('tampilan/edit/{id}','tabelharry@edit');
Route::post('tampilan/update','tabelharry@update');

Route::get('tampilan/hapus/{id}','tabelharry@hapus');