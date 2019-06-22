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

/* Pelanggan */
Route::get('/admin/pelanggan', function () {
    return view('layouts.pelanggan.index');
});
Route::get('/admin/pelanggan/add', function () {
    return view('layouts.pelanggan.tambah');
});
Route::get('/admin/pelanggan/edit', function () {
    return view('layouts.pelanggan.edit');
});

/* Pegawai */
Route::get('/admin/pegawai', function () {
    return view('layouts.pegawai.index');
});

/* Barang */
Route::get('/admin/barang', function () {
    return view('layouts.barang.index');
});

/* Pembelian */
Route::get('/admin/pembelian', function () {
    return view('layouts.pembelian.index');
});

/* Distributor */
Route::get('/admin/distributor', function () {
    return view('layouts.distributor.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('customer', 'CustommerController');
