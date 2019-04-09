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



Route::view('/', 'page.index')->name('index');
Route::view('/about', 'page.about')->name('about');
Route::view('/contact', 'page.contact')->name('contact');
Route::view('/service', 'page.service')->name('service');

Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/form', 'FormController@form')->name('form');
Route::post('/submit', 'FormController@submit')->name('submit');

Route::get('/admin-index', 'PostController@index')->name('admin.dash');
Route::get('/admin-detail/{formRecruit}', 'PostController@detail')->name('admin.detail');
Route::delete('delete/{formRecruit}', 'PostController@delete')->name('delete');
Route::get('admin/file/{file}/download', 'PostController@download')->name('file.download');