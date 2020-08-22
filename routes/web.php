<?php

use App\Http\Controllers\GuestController;
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

Route::get('/',function () {
    return redirect('/guest');
})->name('welcome');
Route::get('/home','HomeController@index')->name('home');

//guest route

Route::group(['prefix' => 'guest'], function () {
    //welcome dan redirect after login
    Route::get('/','GuestController@welcome');

    //login biasa
    Auth::routes(['verify' => true]);

    //login perushaan
    Route::get('/login/perusahaan', 'Perusahaan\AuthPerusahaanController@showLoginForm')->name('perusahaan.login');
    Route::get('/register/perusahaan', 'Perusahaan\AuthPerusahaanController@showRegisterForm')->name('perusahaan.register');
});

// applicant routes

Route::group([
  'namespace' => 'Applicant',
  'prefix' => 'pelamar',
  'middleware' => ['pelamar','auth','verified'],
], function () {
  Route::get('/', 'BerandaApplicantController@index')->name('pelamar.beranda');
  Route::get('/profile', 'ProfileController@index')->name('pelamar.profile');
  Route::get('/profile/edit', 'ProfileController@edit')->name('pelamar.profile.edit');
  Route::patch('/profile/edit/{id}', 'ProfileController@update')->name('pelamar.profile.update');
  Route::get('/loker', 'LowonganKerjaController@index')->name('pelamar.loker');
  Route::get('/loker/{id}', 'LowonganKerjaController@detail')->name('pelamar.loker.detail');
  Route::get('/loker/{id}/apply', 'LowonganKerjaController@successApply')->name('pelamar.loker.apply');
  Route::get('/kursus', 'KursusController@index')->name('pelamar.kursus');
  Route::get('/kursus/detail', 'KursusController@detail')->name('pelamar.kursus.detail');
  Route::get('/lamaran', 'LamaranController@index')->name('pelamar.lamaran');
});


// company routes

Route::group([
  'namespace' => 'Perusahaan',
  'prefix' => 'perusahaan',
  'middleware' => ['perusahaan','auth','verified'],
], function () {
  Route::get('/', 'BerandaPerusahaanController@index')->name('perusahaan.beranda');
  Route::get('/list/lowongan', 'DaftarLowonganController@index')->name('perusahaan.lowongan');
  Route::get('/list/pelamar', 'DaftarPelamarController@index')->name('perusahaan.pelamar');
  Route::get('/bookmark', 'BookmarkController@index')->name('perusahaan.bookmark');
});
