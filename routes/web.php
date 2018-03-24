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

Route::get('foo', function () {
    return 'Foo!';
});
Route::get('foo/foo1', 'FooController@foo1');
Route::get('foo/foo2', 'FooController@foo2');
Route::get('foo/foo4', 'FooController@foo4');

Route::get('article', 'ArticleController@index');
Route::get('create', 'ArticleController@create');
Route::post('create', 'ArticleController@store');
Route::get('edit/{id}', 'ArticleController@edit');
Route::post('edit', 'ArticleController@update');
Route::get('delete/{id}', 'ArticleController@show');
Route::post('delete', 'ArticleController@delete');
