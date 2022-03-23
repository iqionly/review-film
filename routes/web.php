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


// Route::get('/register', 'HomeController@register');
Route::get('/table', function () {
    return view('table');
});
Route::get('/data-tables', function () {
    return view('data-tables');
});

// Cast Controller Route
Route::middleware('auth')->group(function () {
    // Home page
    Route::get('/', function () { return view('welcome'); });

    // Page Cast
    Route::get('/cast', 'CastController@index');
    
    // Page untuk buat cast baru
    Route::get('/cast/create', 'CastController@create');
    
    // Page untuk post cast baru
    Route::post('/cast', 'CastController@store');

    // Page yang menampilkan semua cast
    Route::get('/cast/{cast_id}', 'CastController@show');

    // Page untuk edit cast
    Route::get('/cast/{cast_id}/edit', 'CastController@edit');

    // Page untuk update cast
    Route::put('/cast/{cast_id}', 'CastController@update');

    // Route untuk delete cast dengan parameter cast_id
    Route::delete('/cast/{cast_id}', 'CastController@destroy');

    /**
     * Route Genre
     */
    Route::get('/genre', 'GenreController@show');

    // Route Edit Genre
    Route::get('/genre/{id}/edit', 'GenreController@edit');

    // Route Update Genre
    Route::put('/genre/{id}', 'GenreController@update');

    // Route halaman create genre
    Route::get('/genre/create', 'GenreController@createPage');

    // Route Create Genre
    Route::post('/genre', 'GenreController@create');

    // Route Delete Genre
    Route::delete('/genre/{id}', 'GenreController@destroy');

    // Testing purpose
    Route::get('/genre/list', 'GenreController@test');
});

Route::get('/film', 'FilmController@index');

// User Controller Route
Route::get('/user', 'UserController@index');
Route::get('/user/register', 'UserController@create')->name('register');
Route::post('/user/register', 'UserController@newuser');
Route::get('/user/login', 'UserController@loginPage')->name('login');
Route::post('/user/login', 'UserController@signin');
Route::get('/user/logout', 'UserController@logout')->name('logout');

