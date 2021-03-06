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


// -----------------Home Webiste------------
Route::get('/', 'Front\MainController@home')->name('home');

Route::get('/album/{id}', 'Front\MainController@gallery')->name('gallery');

 
//----------------New letters And ContactForm----------------

Route::post('/new_letters/store', 'Front\MainController@storeNl')->name('news_letters');
Route::post('/message/store', 'Front\MainController@storeMessage')->name('message');

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
Route::get('back-office', 'Admin\HomeController@index')->name('home_view');

/*-------Front Site Mode MAINTENANCE-------*/

Route::get('mode', 'Front\MainModeController@home')->name('home_mode');
Route::get('mode/album/{id}', 'Front\MainModeController@gallery')->name('gallery_mode');


/*--------------NewsLetters et ContactForm----------*/

Route::get('bdd','Admin\ContactController@index')->name('messages');

Route::get('bdd/NL/{id}','Admin\ContactController@delete_NL')->name('delete_NL');
Route::get('bdd/message/{id}','Admin\ContactController@delete_m')->name('delete_m');

// -------------------Create Profile-----------------
Route::get('profile_edit','Admin\ProfileController@profileHome')->name('profile_a');
Route::post('profile_edit/store','Admin\ProfileController@profile_create')->name('profile_create');
Route::get('profile_edit/up/{id}','Admin\ProfileController@profileUp')->name('profile_up_a');
Route::post('profile_edit/up/store/{id?}','Admin\ProfileController@profile_a_up_store')->name('profile_a_up_store');
Route::post('profile_edit/up/pict/store/{id?}','Admin\ProfileController@profilePictUp')->name('profile_pict_up');
Route::get('profile_edit/delete/{id}','Admin\ProfileController@delete_profile')->name('profile_up_a_del');

// -----------------DateTour------------------------
Route::get('tour_date','Admin\DateTourController@index')->name('dates');
Route::post('tour_date/store','Admin\DateTourController@store')->name('date_create');
Route::get('tour_date/up','Admin\DateTourController@up')->name('date_modif');
Route::post('tour_date/up/{id?}','Admin\DateTourController@upStore')->name('date_create_up_store');
Route::get('tour_date/delete/{id}','Admin\DateTourController@delete')->name('delete_date');

// -----------------Music--------------------------

Route::get('music','Admin\MusicController@index')->name('musics');
Route::post('music/store','Admin\MusicController@store')->name('music_create');
Route::get('music/up','Admin\MusicController@up')->name('music_modif');
Route::post('music/up/{id?}','Admin\MusicController@upStore')->name('music_create_up_store');
Route::get('music/delete/{id}','Admin\MusicController@delete')->name('delete_music');

// ------------------Year---------------------------

Route::get('year','Admin\YearController@index')->name('years');
Route::post('year/store','Admin\YearController@store')->name('year_create');
Route::get('year/up','Admin\YearController@up')->name('year_modif');
Route::post('year/up/{id?}','Admin\YearController@upStore')->name('year_create_up_store');
Route::get('year/delete/{id}','Admin\YearController@delete')->name('delete_year');

 Route::get('gallery/{id}','Admin\YearController@viewByGallery')->name('gallery_edit');
 Route::get('video/{id}','Admin\YearController@viewByVideo')->name('video_edit');

// ------------------Album--------------------------

        // ------------Photo-------------

Route::post('gallery/store','Admin\GalleryController@store')->name('photo_create');
Route::post('gallery/update_order','Admin\GalleryController@updateOrder')->name('update_order');
Route::get('gallery/up/{id}','Admin\GalleryController@up')->name('photo_modif');
Route::post('gallery/up/{id?}','Admin\GalleryController@updatePhoto')->name('photo_create_up_store');
Route::get('gallery/delete/{id}','Admin\GalleryController@delete')->name('delete_photo');

        // -------------Video-------------


Route::post('video/store','Admin\VideoController@store')->name('video_create');
Route::get('video/up/{id}','Admin\VideoController@up')->name('video_modif');
Route::post('video/up/{id?}','Admin\VideoController@updateVideo')->name('video_create_up_store');
Route::get('video/delete/{id}','Admin\VideoController@delete')->name('delete_video');



});
