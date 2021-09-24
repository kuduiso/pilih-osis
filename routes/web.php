<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/app', function () {
//     return view('app');
// });

// ===
// LOGIN AND LOGOUT
Route::view('/login-admin', 'admin/login_admin', ['title' => 'Login Admin'])->name('login-admin')->middleware('guest');
Route::post('/check-login-admin', 'LoginController@check_login_admin')->middleware('guest');
Route::view('/', 'users/login_user', ['title' => 'Login Voting'])->name('login')->middleware('guest');
Route::post('/check-login-voting', 'LoginController@check_login_voting')->middleware('guest');
Route::get('/logout-admin', 'LoginController@logout_admin')->middleware('auth');
Route::get('/logout-elector', 'LoginController@logout_elector')->middleware('check.elector');

// REDIRECT IF AUTHENTICATED
Route::get('/home', 'LoginController@index');

// DASHBOARD ADMIN
Route::get('/admin/dashboard', 'AdminController@index')->middleware('auth');
    // -- data admin
Route::get('/admin/data-admin', 'AdminController@data_admin')->middleware('auth');
Route::view('/admin/data-admin/tambah', 'admin/data_admin_tambah', ['title' => 'Tambah Admin'])->middleware('auth');
Route::post('/admin/data-admin/proses-tambah', 'AdminController@add_admin')->middleware('auth');
Route::delete('/admin/data-admin/proses-delete/{id}', 'AdminController@delete_admin')->middleware('auth');
Route::get('/admin/data-admin/edit/{id}', 'AdminController@view_edit_admin')->middleware('auth');
Route::put('/admin/data-admin/proses-edit/{id}', 'AdminController@edit_admin')->middleware('auth');

    // -- data kandidat
Route::get('/admin/data-kandidat', 'KandidatController@index')->middleware('auth');
Route::view('/admin/data-kandidat/tambah', 'admin/data_kandidat_tambah', ['title' => 'Tambah Kandidat'])->middleware('auth');
Route::post('/admin/data-kandidat/proses-tambah', 'KandidatController@tambah_kandidat')->middleware('auth');
Route::delete('/admin/data-kandidat/proses-delete/{id}', 'KandidatController@delete_kandidat')->middleware('auth');
Route::get('/admin/data-kandidat/edit/{id}', 'KandidatController@view_edit_kandidat')->middleware('auth');
Route::put('/admin/data-kandidat/proses-edit/{id}', 'KandidatController@edit_kandidat')->middleware('auth');

    // -- data pemilih
Route::get('/admin/data-pemilih', 'PemilihController@index')->middleware('auth');
Route::view('/admin/data-pemilih/tambah', 'admin/data_pemilih_tambah', ['title' => 'Tambah Pemilih'])->middleware('auth');
Route::post('/admin/data-pemilih/proses-tambah', 'PemilihController@tambah_pemilih')->middleware('auth');
Route::delete('/admin/data-pemilih/proses-delete/{id}', 'PemilihController@delete_pemilih')->middleware('auth');
Route::get('/admin/data-pemilih/edit/{id}', 'PemilihController@view_edit_pemilih')->middleware('auth');
Route::put('/admin/data-pemilih/proses-edit/{id}', 'PemilihController@edit_pemilih')->middleware('auth');
    // -- data hasil suara
Route::get('/admin/data-hasil-suara', 'VotingController@hasil_suara')->middleware('auth');

    // -- reset data
Route::view('/admin/reset-data', 'admin/data_admin_reset_data', ['title' => 'Reset Data'])->middleware('auth');
Route::post('/admin/proses-reset-data', 'AdminController@reset_data')->middleware('auth');

    // -- berita acara
Route::view('/admin/berita-acara', 'admin/berita_acara', ['title' => 'Berita Acara'])->middleware('auth');
Route::post('/admin/proses-berita-acara', 'AdminController@proses_berita_acara')->middleware('auth');

    // -- absensi kegiatan
Route::view('/admin/absensi-kegiatan', 'admin/absensi_kegiatan', ['title' => 'Absensi Kegiatan'])->middleware('auth');
Route::post('/admin/proses-absensi-kegiatan', 'AdminController@proses_absensi_kegiatan')->middleware('auth');

Route::get('/admin/view-absensi', 'AdminController@view_absensi_kegiatan')->middleware('auth');

// VOTING
    // -- main page voting
Route::get('/voting', 'VotingController@index')->middleware('check.elector');
Route::post('/action-voting', 'VotingController@action_vote')->middleware('check.elector');
Route::get('/profile-kandidat/{id}', 'VotingController@profile_kandidat')->middleware('check.elector');


// SANDBOX
Route::get('/sandbox', 'SandboxController@index');
