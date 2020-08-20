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
	if(Auth::check()){
		return redirect('dashboard');
	}
    return view('welcome');
});

Route::post('/login', 'HomeController@login')->name('login');


// User Routes
Route::middleware(['auth'])->group(function () {
	Route::get('/dashboard', 'HomeController@index')->name('dashboard');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('campaigns', 'CampaignController');
	Route::get('/user/timeline', 'HomeController@activity')->name('timeline');
});



Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
//Auth::routes();
