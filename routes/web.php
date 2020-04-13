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
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/biodata', 'BiodataController@get_biodata')->name('biodata');
    Route::get('/biodata/{action}/{mode?}', 'BiodataController@action');
    Route::get('/admin/daftar_pelamar', 'AdminController@daftar_pelamar')->name('daftar_pelamar');
    Route::get('/admin/show/{id}', 'AdminController@show');
    Route::post('/update_pendidikan','ActionController@store_pendidikan');
    Route::post('/update_data_pribadi','ActionController@store_data_pribadi');
    Route::post('/update_data_pelatihan','ActionController@store_data_pelatihan');
    Route::post('/update_data_pekerjaan','ActionController@store_data_pekerjaan');
});
