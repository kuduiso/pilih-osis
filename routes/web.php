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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

// ===
// LOGIN
Route::view('/login-admin', 'admin/login_admin', ['title' => 'Login Admin'])->name('login-admin')->middleware('guest');
Route::post('/check-login-admin', 'LoginController@check_login_admin')->middleware('guest');
Route::get('/logout', 'LoginController@logout')->middleware('auth');
Route::get('/login', function() {
    return 'login voting';
})->name('login');

// REDIRECT IF AUTHENTICATED
Route::get('/home', 'LoginController@index');

// DASHBOARD ADMIN
Route::get('/admin/dashboard', 'AdminController@index')->middleware('auth');
    // -- data admin
Route::get('/admin/data-admin', 'AdminController@data_admin')->middleware('auth');
Route::view('/admin/data-admin/tambah', 'admin/data_admin_tambah', ['title' => 'Tambah Admin'])->middleware('auth');
Route::post('/admin/data-admin/proses-tambah', 'AdminController@add_admin')->middleware('auth');
Route::post('/admin/data-admin/proses-tambah', 'AdminController@add_admin')->middleware('auth');
Route::delete('/admin/data-admin/proses-delete/{id}', 'AdminController@delete_admin')->middleware('auth');
Route::get('/admin/data-admin/edit/{id}', 'AdminController@view_edit_admin')->middleware('auth');
Route::put('/admin/data-admin/proses-edit/{id}', 'AdminController@edit_admin')->middleware('auth');

    // -- data kandidat
Route::get('/admin/data-kandidat', 'KandidatController@index')->middleware('auth');

// VOTING
Route::get('/voting', 'VotingController@index')->middleware('auth');

// SANDBOX
Route::get('/sandbox', 'SandboxController@index');
