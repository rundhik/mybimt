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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::resource('kurikulum', 'KurikulumController');
    Route::resource('matakuliah', 'MataKuliahController');
    Route::get('matkulprodi/{prodi}', 'MataKuliahController@index')->name('matakuliah.prodi');
    Route::get('matakuliah/create/{prodi}', 'MataKuliahController@create')->name('matakuliah.create');
    Route::resource('dosen', 'DosenController');
    Route::resource('ruangan', 'RuangPerkuliahanController');
    Route::resource('jadwal', 'JadwalController');
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
});