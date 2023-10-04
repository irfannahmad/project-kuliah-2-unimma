<?php

use Illuminate\Support\Facades\Route;

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
// user
Route::get('/user', 'Api\UserController@index');
// guru
Route::get('/guru', 'Api\GuruController@index');
Route::get('/create-guru', 'Api\GuruController@create');
// jadwal
Route::get('/jadwal', 'Api\JadwalController@index');
// kelas
Route::get('/kelas', 'Api\KelasController@index');
// mapel
Route::get('/mapel', 'Api\MapelController@index');
Route::get('/create-mapel', 'Api\MapelController@create');
Route::post('/simpan-mapel', 'Api\MapelController@store');
Route::post('/mapel', 'Api\MapelController@store');
Route::get('/edit-mapel/{id}', 'Api\MapelController@edit');
Route::post('/edit-mapel/{id}', 'Api\MapelController@update');
Route::get('/delete-mapel/{id}', 'Api\MapelController@destroy');
// siswa
Route::get('/siswa', 'Api\SiswaController@index');


