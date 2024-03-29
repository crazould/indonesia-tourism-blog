<?php

use App\Article;
use App\Category;
use Illuminate\Http\Request;
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
Route::get('/category/{id}','CategoryController@show');

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::get('/logout', 'AuthController@logout');

Route::get('/profile', 'UserController@edit')->middleware('auth-user');
Route::get('/users/{role}', 'UserController@index')->middleware('auth-admin-role');
Route::put('/users/{id}', 'UserController@update')->middleware('auth-user-role');
Route::delete('/users/{id}', 'UserController@destroy')->middleware('auth-admin-role');


Route::get('/articles/{id}','ArticleController@getUserArticle')->middleware('articles');
Route::get('/article','ArticleController@create')->middleware('auth-user-role');
Route::get('/article/{id}','ArticleController@show');
Route::post('/article','ArticleController@store')->middleware('auth-user-role');
Route::delete('/article/{id}','ArticleController@destroy')->middleware('auth-user');

Route::get('/about-us',function (Request $request) {
    $categories = Category::all();
    $data = [ 'categories' => $categories];
    return view('AboutUsPage', compact('data' ));
});

