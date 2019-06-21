<?php

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
Route::get('/admin/pelanggan', function () {
    return view('layouts.pelanggan.index');
});
Route::get('/admin/pegawai', function () {
    return view('layouts.pegawai.index');
});
Route::get('/admin/barang', function () {
    return view('layouts.barang.index');
});
Route::get('/admin/pembelian', function () {
    return view('layouts.pembelian.index');
});
Route::get('/admin/distributor', function () {
    return view('layouts.distributor.index');
});

Route::get('/pelanggan', function () {
    return view('pelanggan.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

