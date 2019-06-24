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
    /* Pegawai */
    Route::group([
        'prefix' => 'pegawai',
        'as' => 'pegawai'
    ], function(){
        Route::get('/', 'UserController@index');
        Route::post('/', 'UserController@store')->name('.store');
        Route::get('/add', 'UserController@create')->name('.create');
        Route::get('/{id}', 'UserController@edit')->name('.edit');
        Route::put('/{id}', 'UserController@update')->name('.update');
        Route::delete('/{id}', 'UserController@destroy')->name('.destroy');
    });
    /* Distributor */
    Route::group([
      'as' => 'distributor',
      'prefix' => 'distributor',
    ], function () {
      Route::get('/', 'DistributorController@index');
      Route::post('/', 'DistributorController@store')->name('.store');
      Route::get('/add', 'DistributorController@create')->name('.create');
      Route::get('/{id}', 'DistributorController@edit')->name('.edit');
      Route::put('/{id}', 'DistributorController@update')->name('.update');
      Route::delete('/{id}', 'DistributorController@destroy')->name('.destroy');
    });
    /* Barang */
    Route::group([
      'as' => 'barang',
      'prefix' => 'barang',
    ], function () {
      Route::get('/', 'BarangController@index');
      Route::post('/', 'BarangController@store')->name('.store');
      Route::get('/add', 'BarangController@create')->name('.create');
      Route::get('/{id}', 'BarangController@edit')->name('.edit');
      Route::put('/{id}', 'BarangController@update')->name('.update');
      Route::delete('/{id}', 'BarangController@destroy')->name('.destroy');
    });
});

/* Barang */
/*
Route::get('/admin/barang', function () {
    return view('layouts.barang.index');
});
Route::get('/admin/barang/add', function () {
    return view('layouts.barang.tambah');
});
Route::get('/admin/barang/edit', function () {
    return view('layouts.barang.edit');
});
 */

/* Pembelian */
Route::get('/admin/pembelian', function () {
    return view('layouts.pembelian.index');
});
Route::get('/admin/pembelian/add', function () {
    return view('layouts.pembelian.tambah');
});
Route::get('/admin/pembelian/edit', function () {
    return view('layouts.pembelian.edit');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('customer', 'CustommerController');
