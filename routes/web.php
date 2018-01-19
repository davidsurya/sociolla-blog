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

Route::get('/', 'HomeController@getHomeBlog');

Route::post('login', 'AuthController@postLogin')->name('login');
Route::get('login', function () {
    return view('auth.partials.login');
});

Route::post('register', 'AuthController@postRegister');
Route::get('register', function () {
    return view('auth.partials.register');
});

Route::get('tags/{tag_name}', 'HomeController@getPostByTag');
Route::get('archives/{date}', 'HomeController@getPostByArchiveDate');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
	Route::get('/', 'DashboardController@getDashboardHome');
	Route::post('post', 'DashboardController@postNewBlog');
	Route::get('post', 'DashboardController@getNewBlog');
});

Route::get('logout', function() {
	\Auth::logout();

	return redirect('/');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');