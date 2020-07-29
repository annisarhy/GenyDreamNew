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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// applicant routes
Route::get('/lowongankerja', 'LowonganKerjaController@index')->name('lowongankerja');
Route::get('/detaillowongankerja', 'LowonganKerjaDetailController@index')->name('detaillowongankerja');
Route::get('/detailkursus', 'KursusDetailController@index')->name('detailkursus');
Route::get('/kursus', 'KursusController@index')->name('kursus');

// company routes
