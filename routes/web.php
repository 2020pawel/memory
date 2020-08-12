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

Route::get('/', 'PostController@index');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/posts/{post}', 'PostController@show')->name('posts.single');
Route::get('/memory', 'PostController@memory')->name('memory');

Route::get('/about-me', function () {
    return view('pages.about');
})->name('about');

Auth::routes();
Route::get('/account/register', 'Auth\RegisterController@showRegistrationForm')->name('register'); 
Route::post('/account/register', 'Auth\RegisterController@register'); 
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login'); 

 Route::get('/home', 'HomeController@index')->name('home');
