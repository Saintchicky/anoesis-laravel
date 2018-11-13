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
    return view('home');
})->name('home');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');


// ------------Site MAINTENANCE---------
// A route for shut it down, user must be authenticated to do this:
Route::get('shut/app/down', function() 
{
    Artisan::call('down');
       return Redirect::back();
})->name('mode_down');

//--------Back-office---SITE MANAGEMENT----------
Route::prefix('admin')->group(function () {

// A route to bring up, user must be authenticated to do this:
    Route::get('bring/app/back/up', function() 
{
    Artisan::call('up');
        return Redirect::back();
})->name('mode_up');

//.............. Authentification ................
Auth::routes();



/*---------------For Log into Back-office-----------*/
Route::get('/back-office', 'HomeController@index')->name('home_view');

/*-------Front Site Mode MAINTENANCE-------*/

Route::get('/mode', function () {
    return view('home');
})->name('home_mode');

/*NewsLetters et ContactForm*/

Route::get('back-office/bdd','Admin\ContactController@index')->name('messages');

});
