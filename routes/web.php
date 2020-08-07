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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


// applicant routes

Route::group(['namespace' => 'Applicant'], function () {
  Route::get('/profile', 'ProfileController@index')->name('profile');
  Route::get('/edit-profile', 'ProfileController@edit')->name('profile.edit');
  Route::patch('/edit-profile/{id}', 'ProfileController@update')->name('profile.update');
});

Route::get('/berandaapplicant', 'BerandaApplicantController@index')->name('berandaapplicant');
Route::get('/lowongankerja', 'LowonganKerjaController@index')->name('lowongankerja');
Route::get('/detaillowongankerja', 'LowonganKerjaDetailController@index')->name('detaillowongankerja');
Route::get('/detailkursus', 'KursusDetailController@index')->name('detailkursus');
Route::get('/kursus', 'KursusController@index')->name('kursus');
Route::get('/sukses-apply-lamaran', 'SuksesApplyController@index')->name('sukses-apply-lamaran');
Route::get('/apply-lamaran', 'ApplyLamaranController@index')->name('apply-lamaran');

// company routes
