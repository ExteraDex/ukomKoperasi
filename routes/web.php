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

// Route::get('/', function () {
//     return view('welcome');
// }); 
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
/*HALAMAN*/
Route::resource('anggota', 'AnggotaController');
Route::resource('detail', 'DetailController');
Route::resource('kategori', 'KategoriController');
Route::resource('petugas', 'petugasController');
Route::resource('pinjaman', 'pinjamanController');
Route::resource('simpanan', 'simpananController');
Route::resource('angsuran', 'AngsuranController');
/*SEARCH*/
Route::get('query', 'CariController@search');
/*PROFILE*/
Route::resource('profile', 'EditprofileController');