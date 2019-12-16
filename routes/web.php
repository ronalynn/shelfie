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

Route::get('books', 'BookController@index')->name('books.index');
Route::get('books/{id}', 'BookController@show')->name('books.show');

Route::get('comments', 'CommentController@index')->name('comments.index');
Route::get('comments/{id}', 'CommentController@show')->name('comments.show');

Route::get('genres', 'GenreController@index')->name('genres.index');
Route::get('genres/{id}', 'GenreController@show')->name('genres.show');

Route::get('profiles', 'ProfileController@index')->name('profiles.index');
Route::get('profiles/{id}', 'ProfileController@show')->name('profiles.show');

Route::get('reviews', 'ReviewController@index')->name('reviews.index');
Route::get('reviews/{id}', 'ReviewController@show')->name('reviews.show');

Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/{id}', 'UserController@show')->name('users.show');
