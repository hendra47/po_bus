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

//website
Route::get('/website', 'WebsiteController@index');
Route::get('/website/login', 'WebsiteController@login');
Route::get('/website/perjalanan', 'WebsiteController@perjalanan');
Route::get('/website/register', 'WebsiteController@register');
Route::post('register', 'WebsiteController@tambah');











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
