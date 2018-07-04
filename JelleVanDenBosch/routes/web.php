<?php

// HOME
Route::get('/', 'Controller@index');
// POSTS
Route::get('/posts', 'PostController@index');
Route::get('/post/new', 'PostController@new');
Route::post('/post/new', 'PostController@store');

Route::get('/post/edit/{id}', 'PostController@show');
Route::post('/post/edit/{id}', 'PostController@update');
Route::get('/post/delete/{id}', 'PostController@destroy');
// ADMIN
Route::get('/admin', 'AdminController@index');
Route::get('/admin/posts', 'AdminController@posts');
Route::get('/admin/post/edit/{id}', 'AdminController@show');
Route::post('/admin/post/edit/{id}', 'AdminController@update');
Route::get('/admin/post/delete/{id}', 'AdminController@destroy');
// REG
Route::post('/register', 'Auth\RegisterController@register');
// LOG
Route::get('/logout', 'Auth\LoginController@logout');
// AUTH
Auth::routes();
Route::get('/home', 'HomeController@index');

//MIDDLEWARE
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function() {
    Route::match(['get', 'post'], '/admin/', 'HomeController@admin');
    Route::match(['get', 'post'], '/auth/', 'HomeController@admin');
});