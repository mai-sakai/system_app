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

//登録画面の表示
Route::get('/data/create', 'DataController@showCreate')->name
('create');

//登録
Route::post('/data/store', 'DataController@exeStore')->name
('store');

//詳細画面の表示
Route::get('/data/{id}', 'DataController@showDetail')->name
('show');

//編集画面の表示
Route::get('/data/edit/{id}', 'DataController@showEdit')->name
('edit');

Route::post('/data/update', 'DataController@exeUpdate')->name
('update');

//削除
Route::post('/data/delete/{id}', 'DataController@exeDelete')->name
('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
