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

Route::get('/', 'Users\HomePage')->name('home');

// Artist list blade
Route::get('/profile', 'Users\ProfileController@index')->name('artist.list');

// Artist profile blade
Route::get('/profile/{user_name}', 'Users\ProfileController@show')->name('profile.show');

Route::get('/profile/{user_name}/edit', 'Users\ProfileController@edit')->name('profile.edit');

Route::post('/profile/{user_name}', 'Users\ProfileController@update')->name('profile.update');

Route::post('/profile-pic/{user_name}', 'Users\ProfileController@ProfilePic')->name('profile.picture.update')->middleware('optimizeImages');

Route::post('/cover-pic/{user_name}', 'Users\ProfileController@Coverpic')->name('cover.picture.update')->middleware('optimizeImages');



// Artist login blade
Route::get('/login', function () {
    return view('mkd_design.pages.login');
});

// Artist password change blade
Route::get('/password', 'Users\AuthController@EditPass');
Route::post('/password', 'Users\AuthController@UpdatePass')->name('update.pass');


// Artist pricing edit blade

Route::get('price', 'Users\PriceController@create')->name('price.create');
Route::post('price', 'Users\PriceController@store')->name('price.store');

Route::get('/pricing/{price}/edit', 'Users\PriceController@edit')->name('price.edit');
Route::post('/pricing/{price}', 'Users\PriceController@update')->name('price.update');

// Artist booking edit blade
Route::get('/bookings', function () {
    return view('mkd_design.pages.artist.artist-booking');
});

// Artist booking blade
Route::get('/book/now', function () {
    return view('mkd_design.pages.user.book-now');
});


Route::get('/register', 'Users\AuthController@RegistrationIndex')->name('register.index');
Route::post('/register', 'Users\AuthController@RegistrationSubmit')->name('register.submit');
Route::post('/user/reg', 'Users\AuthController@UserRegister')->name('user.register.submit');
Route::get('/login', 'Users\AuthController@LoginIndex')->name('login.index');
Route::post('/login', 'Users\AuthController@LoginSubmit')->name('login.submit');
Route::get('/logout', 'Users\AuthController@Logout')->name('logout');
Route::get('/auth/redirect/{provider}', 'Users\AuthController@redirect');
Route::get('/callback/{provider}', 'Users\AuthController@callback');
Route::post('/social-login', 'Users\AuthController@SocialLogin')->name('social.login');
