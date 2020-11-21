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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dnsc', function () {
    return view('dnsc');
});

// CRUD

Route::group(['middleware' => 'auth'], function () {
    Route::get('/posts', 'PostController@index'); //  read
    Route::post('/posts', 'PostController@store'); // create
    Route::put('/posts/{post}', 'PostController@update'); // update
    Route::get('/posts/{post}/delete', 'PostController@destroy'); // update

    Route::get('/posts/new', 'PostController@new');
    Route::get('/posts/{post}/edit', 'PostController@edit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
