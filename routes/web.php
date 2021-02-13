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

Route::get('/','ArticleController@index');
Route::get('/login','AuthController@showLoginPage');
Route::get('/register','AuthController@showRegisterPage');
Route::get('/article/{id}','ArticleController@show');
Route::get('/category/{id}','CategoryController@show');

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::get('/logout', 'AuthController@logout');

Route::get('/users/{role}', 'UserController@index');
Route::post('/users/{id}', 'UserController@destroy');

