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

Route::get('/overview', 'Overview\OverviewController@index');

Route::get('/barang', 'Barang\BarangController@index');
Route::get('/barang/tambah', 'Barang\BarangController@tambah');
Route::post('/barang/store', 'Barang\BarangController@store');
Route::get('/barang/hapus/{id}', 'Barang\BarangController@hapus');
Route::get('/barang/edit/{id}', 'Barang\BarangController@edit');
Route::post('/barang/update', 'Barang\BarangController@update');

Route::get('/pembeli', 'Pembeli\PembeliController@index');
Route::get('/pembeli/tambah', 'Pembeli\PembeliController@tambah');
Route::post('/pembeli/store', 'Pembeli\PembeliController@store');
Route::get('/pembeli/hapus/{id}', 'Pembeli\PembeliController@hapus');
Route::get('/pembeli/edit/{id}', 'Pembeli\PembeliController@edit');
Route::post('/pembeli/update', 'Pembeli\PembeliController@update');

Route::get('/transaksi', 'Transaksi\TransaksiController@index');
Route::get('/transaksi/tambah', 'Transaksi\TransaksiController@tambah');
Route::post('/transaksi/store', 'Transaksi\TransaksiController@store');
Route::get('/transaksi/hapus/{id}', 'Transaksi\TransaksiController@hapus');