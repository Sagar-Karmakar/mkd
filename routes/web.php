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
    return view('mkd_design.pages.homepage');
});


// Artist profilr blade
Route::get('/profile', function () {
    return view('mkd_design.pages.artist.artist-profile');
});

// Artist list blade
Route::get('/list', function () {
    return view('mkd_design.pages.artist.artist-showcase');
});


Route::get('/register', 'Users\AuthController@RegistrationIndex')->name('register.index');
Route::post('/register', 'Users\AuthController@RegistrationSubmit')->name('register.submit');
Route::get('/login', 'Users\AuthController@LoginIndex')->name('login.index');
Route::post('/login', 'Users\AuthController@LoginSubmit')->name('login.submit');
