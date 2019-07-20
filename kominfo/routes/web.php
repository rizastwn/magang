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

Route::get('/', 'KecamatanController@index');

Route::resource('kecamatan', 'KecamatanController');
Route::resource('lapanganolahraga', 'LapanganController');
Route::resource('strukturPemerintahan', 'PemerintahanController');
Route::resource('penduduk', 'PendudukController');
Route::resource('prestasi', 'PrestasiController');
Route::resource('surat', 'SuratController');
Route::resource('tempatibadah', 'TempatibadahController');
Route::resource('tempatwisata', 'TempatWisataController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
