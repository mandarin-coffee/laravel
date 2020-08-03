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

//Route::get('/', 'NewsController@index');
Route::get('/news/{id}.html', 'NewsController@show')
    ->where('id', '\d+')
    ->name('news.show');
Route::get('/', 'WelcomeController@index');
Route::get('/added', 'addNewsController@addNews')
    ->name('add.news');

//for category
Route::group(['prefix' => 'category'], function (){
    Route::get('/', 'CategoryNewsController@category')
        ->name('category.news');
    Route::get('/sport', 'CategoryNewsController@sport')
        ->name('category.news.sport');
    Route::get('/medic', 'CategoryNewsController@medic')
        ->name('category.news.medic');
    Route::get('/lifehacks', 'CategoryNewsController@lifehacks')
        ->name('category.news.lifehacks');
    Route::get('/builder', 'CategoryNewsController@builder')
        ->name('category.news.builder');
    Route::get('/sport/news/{id}', 'CategoryNewsController@openNews')
        ->where('id', '\d+')
        ->name('category.news.sport');
    Route::get('/medic/news/{id}', 'CategoryNewsController@openNews')
        ->where('id', '\d+')
        ->name('category.news.medic');
    Route::get('/lifehacks/news/{id}', 'CategoryNewsController@openNews')
        ->where('id', '\d+')
        ->name('category.news.lifehacks');
    Route::get('/builder/news/{id}', 'CategoryNewsController@openNews')
        ->where('id', '\d+')
        ->name('category.news.builder');
});

//for admin
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'Admin\IndexController@index')
        ->name('admin');
    Route::get('/news', 'Admin\NewsController@index')
        ->name('admin.news');
    Route::get('/news/create', 'Admin\NewsController@create')
        ->name('admin.news.create');
    Route::get('/news/{id}/edit', 'Admin\NewsController@edit')
        ->where('id', '\d+')
        ->name('admin.news.edit');
});



//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/hello/{name}', function ($name) {
//    return 'hello '. $name ;
//});
//
//Route::get('/info', function () {
//    return view('info');
//});
//Route::get('/news', function () {
//    return view('info');
//});
