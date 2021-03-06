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
  return redirect('home');
});

Auth::routes();

//website uploadBukti
Route::get('/website', 'WebsiteController@index');
Route::get('/website/login', 'WebsiteController@login');
Route::get('/website/validasi', 'WebsiteController@validasi');
Route::get('/website/duduk/{id}/{tgl}', 'WebsiteController@duduk');
Route::get('/website/pesanan', 'WebsiteController@pesanan');
Route::get('/website/upload/{id}', 'WebsiteController@upload');
Route::get('/website/logout', 'WebsiteController@logout');
Route::get('/website/perjalanan', 'WebsiteController@perjalanan');
Route::get('/website/register', 'WebsiteController@register');
Route::post('website/register2', 'WebsiteController@tambah');
Route::post('website/login2', 'WebsiteController@klik_login');
Route::post('website/upload-bukti', 'WebsiteController@uploadBukti');
Route::post('website/pilih', 'WebsiteController@pilih_kursi');
Route::post('website/cari', 'WebsiteController@cari');

Route::post('/laporan/total', 'LaporanController@cari');
Route::get('/laporan/total', 'LaporanController@index');
Route::get('/laporan/order', 'LaporanController@index');










Route::get('/home', 'HomeController@index');

Route::resource('users', 'userController');

Route::resource('hakAkses', 'hakAksesController');




Route::resource('hargas', 'hargaController');

Route::resource('hargas', 'hargaController');

Route::resource('members', 'memberController');

Route::resource('buses', 'busController');

Route::resource('hargas', 'hargaController');


Route::resource('kelas', 'kelasController');


Route::resource('transaksis', 'transaksiController');

Route::resource('kota_url', 'kotaController');


Route::resource('jam', 'jamController');

Route::resource('rute', 'ruteController');


Route::resource('hargas', 'hargaController');

Route::resource('transaksiDetails', 'transaksi_detailController');