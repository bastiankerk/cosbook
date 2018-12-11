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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/login/custom', [
    'uses' => 'LoginController@login',
    'as' => 'login.custom'
]);

Route::post('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::post('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home', ['user' => \Auth::user()]);
    })->name('home');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});