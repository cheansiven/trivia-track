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

Route::get('/', 'HomeController@index');
Route::get('type/{name}', 'HomeController@dotest');
Route::post('/selected/{answer}', 'HomeController@getCorrect');

Route::get('admin', 'BackendLoginController@showLogin');
Route::post('admin', 'BackendLoginController@adminLogin');
Route::group(['middleware' => ['admin']],function(){
    Route::get('dashboard', 'BackendController@dashboard');
    Route::resource('category', 'CategoryController');
    Route::post('category/{id}/delete', 'CategoryController@destroy');
    Route::resource('question', 'QuestionController');
    Route::post('question/{id}/delete', 'QuestionController@destroy');
    Route::get('import-export', 'ExportController@index');
});

//Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');
