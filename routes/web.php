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

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function() {
    /* Pelanggan */
    Route::group([
        'prefix' => 'pelanggan',
        'as' => 'custommer'
    ], function(){
        Route::get('/', 'CustommerController@index');
        Route::post('/', 'CustommerController@store')->name('.store');
        Route::get('/add', 'CustommerController@create')->name('.create');
        Route::get('/{id}', 'CustommerController@edit')->name('.edit');
        Route::put('/{id}', 'CustommerController@update')->name('.update');
        Route::delete('/{id}', 'CustommerController@destroy')->name('.destroy');
    });
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

