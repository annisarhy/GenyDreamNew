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

//welcome dan redirect after login
Route::get('/','GuestController@welcome')->name('welcome');;
Route::get('/home','HomeController@index')->name('home');

//login biasa
Auth::routes(['verify' => true]);

Route::get('/register/pelamar', 'Applicant\AuthPerusahaanController@showRegisterForm')->name('perusahaan.register');

//login perushaan
//sorry dicomment dulu soalnya rada gak make sense sama halaman admin
// Route::get('/login/perusahaan', 'Perusahaan\AuthPerusahaanController@showLoginForm')->name('perusahaan.login');
// Route::get('/register/perusahaan', 'Perusahaan\AuthPerusahaanController@showRegisterForm')->name('perusahaan.register');

// applicant routes

Route::group([
  'namespace' => 'Applicant',
  'prefix' => 'pelamar',
  'middleware' => ['pelamar','auth','verified'],
], function () {
  Route::get('/', 'BerandaController@index')->name('pelamar.beranda');
  Route::get('/profile', 'ProfileController@index')->name('pelamar.profile');
  Route::patch('/profile/edit/{id}', 'ProfileController@updateProfile')->name('pelamar.profile.basic.update');
  Route::patch('/profile/edit/{id}/deskripsi', 'ProfileController@updateDeskripsi')->name('pelamar.profile.deskripsi.update');
  Route::patch('/profile/edit/{id}/rpendidikan', 'ProfileController@storeRPendidikan')->name('pelamar.profile.rpendidikan.add');
  Route::patch('/profile/edit/{id}/rpendidikan/{rpendidikan}', 'ProfileController@updateRPendidikan')->name('pelamar.profile.rpendidikan.update');
  Route::patch('/profile/edit/{id}/keahlian', 'ProfileController@updateKeahlian')->name('pelamar.profile.keahlian.update');
  Route::patch('/profile/edit/{id}/rpekerjaan', 'ProfileController@updateRPekerjaan')->name('pelamar.profile.rpekerjaan.update');
  Route::patch('/profile/edit/{id}/kompetensi', 'ProfileController@updateKompetensi')->name('pelamar.profile.kompetensi.update');

  Route::get('/loker', 'LowonganKerjaController@index')->name('pelamar.loker');
  Route::get('/loker/{id}', 'LowonganKerjaController@detail')->name('pelamar.loker.detail');
  Route::get('/loker/{id}/apply', 'LowonganKerjaController@successApply')->name('pelamar.loker.apply');
  Route::get('/kursus', 'KursusController@index')->name('pelamar.kursus');
  Route::get('/kursus/detail', 'KursusController@detail')->name('pelamar.kursus.detail');
  Route::get('/lamaran', 'LamaranController@index')->name('pelamar.lamaran');
  Route::get('/bookmark', 'LowonganKerjaController@bookmark')->name('pelamar.bookmark');
});

// company routes

Route::group([
  'namespace' => 'Perusahaan',
  'prefix' => 'perusahaan',
  'middleware' => ['perusahaan','auth','verified'],
], function () {
  Route::get('/', 'BerandaController@index')->name('perusahaan.beranda');
  Route::get('/profile-perusahaan', 'ProfilePerusahaanController@index')->name('perusahaan.profile');  
  Route::get('/lowongan', 'DaftarLowonganController@index')->name('perusahaan.list.lowongan');

  Route::get('/detaillowonganperusahaan', 'DaftarLowonganController@detailLowongan')->name('perusahaan.detail.lowongan');

  Route::get('/lowongan/tambah-lowongan', 'AddLowonganController@index')->name('perusahaan.add.lowongan');  

  Route::get('/daftarpelamar', 'ListPelamarController@index')->name('perusahaan.list.pelamar');  

  Route::get('/detailpelamar', 'ListPelamarController@detailPelamar')->name('perusahaan.detail.pelamar');
});



// admin routes
Route::group([
  'namespace' => 'Admin',  
  'prefix' => 'admin',
  'middleware' => ['admin','auth'],
], function () {
  Route::get('/', 'DashboardAdminController@index')->name('admin.beranda');
  // perusahaan
  Route::get('/perusahaan', 'KelolaPerusahaanController@index')->name('admin.perusahaan.index');
  Route::get('/perusahaan/new', 'KelolaPerusahaanController@create')->name('admin.perusahaan.add');
  Route::get('/perusahaan/{id}', 'KelolaPerusahaanController@detail')->name('admin.perusahaan.detail');
  Route::get('/perusahaan/{id}/edit', 'KelolaPerusahaanController@edit')->name('admin.perusahaan.edit');
  Route::post('/perusahaan','KelolaPerusahaanController@store');
  Route::patch('/perusahaan/{id}','KelolaPerusahaanController@update');
  Route::delete('/perusahaan/{id}','KelolaPerusahaanController@destroy')->name('admin.perusahaan.delete');

  // user
  Route::get('/user', 'KelolaUserController@index')->name('admin.user.index');
  Route::get('/user/new', 'KelolaUserController@create')->name('admin.user.add');
  Route::get('/user/{id}', 'KelolaUserController@detail')->name('admin.user.detail');
  Route::get('/user/{id}/edit', 'KelolaUserController@edit')->name('admin.user.edit');
  Route::post('/user','KelolaUserController@store');
  Route::patch('/user/{id}','KelolaUserController@update');
  Route::delete('/user/{id}','KelolaUserController@destroy')->name('admin.user.delete');


  // berita
  
});


Route::group([
  'namespace' => 'Debug',
  'prefix' => 'debug',
  'middleware' => ['admin','auth'],
], function () {
  Route::get('/migrateFS','ArtisanController@migrateFreshSeed');
  Route::get('/migrateF','ArtisanController@migrateFresh');
  Route::get('/migrateS','ArtisanController@migrateSeed');
  Route::get('/migrate','ArtisanController@migrate');
  Route::get('/clearCache','ArtisanController@clearCache');
});