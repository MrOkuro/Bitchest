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

//Auth::routes();
// Authentication Routes..
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');


// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');



$this->post('logout', 'Auth\LoginController@logout')->name('logout');

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function () {
    return view('layouts.default');
    });

Route::get('/home', 'HomeController@index')->name('home');


//Route Admin pour dashbord
Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');
//Route::get('/admin/users', 'Admin\AdminController@index')->name('admin.users');
Route::get('/admin/users/create', 'Admin\AdminController@create')->name('admin.users.create');
Route::post('/admin/users/store', 'Admin\AdminController@store')->name('admin.users.store');
Route::get('/admin/users/edit/{id}', 'Admin\AdminController@edit')->name('admin.users.edit');
Route::put('/admin/users/update/{id}', 'Admin\AdminController@update')->name('admin.users.update');
Route::delete('/admin/users/delete/{id}', 'Admin\AdminController@delete')->name('admin.users.delete');

Route::get('/admin/crypto/liste', 'Admin\CryptoController@index')->name('admin.crypto.index');

//Route pour user normal
Route::get('/client', 'UserController@index')->name('user.index');
Route::get('/client/edit/{id}', 'UserController@edit')->name('user.edit');
Route::get('/client/update/{id}', 'UserController@update')->name('user.update');
Route::get('/client/wallet/{id}', 'WalletController@show')->name('user.wallet.show');

Route::get('/client/crypto/liste', 'CryptoController@index')->name('user.crypto.index');
Route::get('/client/crypto/show{id}', 'CryptoController@show')->name('user.crypto.show');
Route::get('/client/crypto/achat', 'CryptoController@achat')->name('user.crypto.achat');
Route::get('/client/crypto/vente', 'CryptoController@vente')->name('user.crypto.vente');

