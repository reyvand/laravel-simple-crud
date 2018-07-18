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

Route::get('/', 'MainController@index');

Route::prefix('author')->group(function() {
  Route::get('/','AuthorController@index');
  Route::get('/add','AuthorController@add');
  Route::get('/edit/{id}', 'AuthorController@edit');
  Route::get('/delete/{id}', 'AuthorController@delete');
  Route::post('/save', 'AuthorController@insert');
  Route::post('/update/{id}', 'AuthorController@update');
});

Route::prefix('article')->group(function() {
  Route::get('/', 'ArticleController@index');
  Route::get('/add', 'ArticleController@add');
  Route::get('/edit/{id}', 'ArticleController@edit');
  Route::get('/delete/{id}', 'ArticleController@delete');
  Route::post('/save', 'ArticleController@insert');
  Route::post('/update/{id}', 'ArticleController@update');
});