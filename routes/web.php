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

// Det har ar mina routes, Anders Rochester dec 2017 //
//
// De som ar vitala for hemtentan är lostofposts, enterpost och hem
Route::get('listofposts', 'PagesController@getListofposts' );
Route::get('enterpost', 'PagesController@getEnterpost' );
Route::get('contact', 'PagesController@getContact' );
Route::get('about', 'PagesController@getAbout' );
Route::get('/', 'PagesController@getIndex' );

Route::resource('posts', 'PostController');
