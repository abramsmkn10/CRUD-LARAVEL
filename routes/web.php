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
   echo "Hello World";
});

Route::get('/home/{nama}',function($nama="Kosong")
{
	echo "Hello".$nama;
});
Route::get('/profile/(nama)','HomeController@profile');

Route::get('/direct-profile','HomeController@profileview');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create_jurusan/{nama}','HomeController@create_jurusan');
Route::get('/update_jurusan/{nama}/{id}','HomeController@update_jurusan');
Route::get('/delete_jurusan/{id}','HomeController@delete_jurusan');
Route::get('/view_jurusan/{nama}','HomeController@view_jurusan');

Route::prefix('siswa')->group(function(){
	Route::get('/all', 'SiswaController@index');
	Route::get('/add', 'SiswaController@add');
	Route::get('/edit/{id}', 'SiswaController@edit');
	Route::post('/save', 'SiswaController@save');
	Route::post('/update', 'SiswaController@update');
	// Route::get('/delete', 'SiswaController@delete');
	Route::get('/delete/{id}', 'SiswaController@delete');
});
Route::prefix('jurusan')->group(function(){
	Route::get('/all', 'JurusanController@index');
	Route::get('/add', 'JurusanController@add');
	Route::get('/edit/{id}', 'JurusanController@edit');
	Route::post('/save', 'JurusanController@save');
	Route::post('/update', 'JurusanController@update');
	// Route::get('/delete', 'SiswaController@delete');
	Route::get('/delete/{id}', 'JurusanController@delete');
});
Route::prefix('kelas')->group(function(){
	Route::get('/all', 'KelasController@index');
	Route::get('/add', 'KelasController@add');
	Route::get('/edit/{id}', 'KelasController@edit');
	Route::post('/save', 'KelasController@save');
	Route::post('/update', 'KelasController@update');
	// Route::get('/delete', 'SiswaController@delete');
	Route::get('/delete/{id}', 'KelasController@delete');
});