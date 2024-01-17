<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

// returns the home page with all posts
Route::get('/', PostController::class . '@index')->name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class . '@store')->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class . '@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class . '@edit')->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class . '@update')->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class . '@destroy')->name('posts.destroy');

Route::get('/', LoginController::class . '@login')->name('login');
Route::post('loginaksi', LoginController::class.'@loginaksi')->name('loginaksi');
Route::get('home', HomeController::class .'@index')->name('home')->middleware('auth');
Route::get('logoutaksi', LoginController::class.'@logoutaksi')->name('logoutaksi')->middleware('auth');

Route::get('/post/index', 'PostController@index');