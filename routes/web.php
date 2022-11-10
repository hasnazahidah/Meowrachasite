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

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});

Route::get('/artikel', function () {
    return view('/admin/artikel');
});

Route::get('/konsultasi', function () {
    return view('/admin/konsultasi');
});

Route::get('/penitipan', function () {
    return view('/admin/penitipan');
});

Route::get('/adopsi', function () {
    return view('/admin/adopsi');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
