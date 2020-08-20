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


Route::get('/loginperusahaan', 'AuthPerusahaan\LoginPerusahaanController@index')->name('loginperusahaan');
Route::get('/registerperusahaan', 'AuthPerusahaan\RegisterPerusahaanController@index')->name('loginperusahaan');

// applicant routes

Route::group(['namespace' => 'Applicant'], function () {
  Route::get('/profile', 'ProfileController@index')->name('profile');
  Route::get('/edit-profile', 'ProfileController@edit')->name('profile.edit');
  Route::patch('/edit-profile/{id}', 'ProfileController@update')->name('profile.update');
  Route::get('/beranda-applicant', 'BerandaApplicantController@index')->name('beranda-applicant');
  Route::get('/lowongan-kerja', 'LowonganKerjaController@index')->name('lowongan-kerja');
  Route::get('/detail-lowongan-kerja', 'LowonganKerjaDetailController@index')->name('detail-lowongan-kerja');
  Route::get('/detail-kursus', 'KursusDetailController@index')->name('detail-kursus');
  Route::get('/kursus', 'KursusController@index')->name('kursus');
  Route::get('/sukses-apply-lamaran', 'SuksesApplyController@index')->name('sukses-apply-lamaran');
  Route::get('/apply-lamaran', 'ApplyLamaranController@index')->name('apply-lamaran');
});


// company routes

Route::group(['namespace' => 'Perusahaan'], function () {
  Route::get('/beranda-perusahaan', 'BerandaPerusahaanController@index')->name('beranda-perusahaan');
  Route::get('/daftar-lowongan', 'DaftarLowonganController@index')->name('daftar-lowongan');
  Route::get('/daftar-pelamar', 'DaftarPelamarController@index')->name('daftar-pelamar');
  Route::get('/bookmark', 'BookmarkController@index')->name('bookmark');
});

