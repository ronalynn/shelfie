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
Route::get('books/create', 'BookController@create')->name('books.create');
Route::post('books', 'BookController@store')->name('books.store');
Route::get('books/{id}', 'BookController@show')->name('books.show');
Route::delete('books/{id}', 'BookController@destroy')->name('books.destroy');

Route::get('reviews', 'ReviewController@index')->name('reviews.index');
Route::get('reviews/create', 'ReviewController@create')->name('reviews.create');
Route::post('reviews', 'ReviewController@store')->name('reviews.store');
Route::get('reviews/{id}', 'ReviewController@show')->name('reviews.show');
Route::delete('reviews/{id}', 'ReviewController@destroy')->name('reviews.destroy');

Route::get('comments', 'CommentController@index')->name('comments.index');
Route::get('comments/create', 'CommentController@create')->name('comments.create');
Route::post('comments', 'CommentController@store')->name('comments.store');
Route::get('comments/{id}', 'CommentController@show')->name('comments.show');
Route::delete('comments/{id}', 'CommentController@destroy')->name('comments.destroy');

Route::get('genres', 'GenreController@index')->name('genres.index');
Route::get('genres/create', 'GenreController@create')->name('genres.create');
Route::post('genres', 'GenreController@store')->name('genres.store');
Route::get('genres/{id}', 'GenreController@show')->name('genres.show');
Route::delete('genres/{id}', 'GenreController@destroy')->name('genre.destroy');

Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users', 'UserController@store')->name('users.store');
Route::get('users/{id}', 'UserController@show')->name('users.show');
Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');

Route::get('profiles', 'ProfileController@index')->name('profiles.index');
Route::get('profiles/create', 'ProfileController@create')->name('profiles.create');
Route::post('profiles', 'ProfileController@store')->name('profiles.store');
Route::get('profiles/{id}', 'ProfileController@show')->name('profiles.show');
Route::delete('profiles/{id}', 'ProfileController@destroy')->name('profiles.destroy');
