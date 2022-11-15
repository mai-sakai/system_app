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

//一覧画面の表示
Route::get('/', 'DataController@showList')->name
('datas');


//詳細画面の表示
Route::get('/data/{id}', 'DataController@showDetail')->name
('show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
