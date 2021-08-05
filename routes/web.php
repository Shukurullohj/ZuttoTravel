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

Route::view('scan', 'scan');
Route::view('about', 'about');
Route::get('location', 'AutoAddressController@googleAutoAddress');
Route::view('contact', 'contact');



Auth::routes();
Route::group(['middleware' => 'auth'], function() {
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/places', 'PlaceController@index');
Route::get('/home', 'PlaceController@home');
Route::get('/places/search', 'SearchController@show');


Route::get('/places/create', 'PlaceController@create');
Route::get('/places/{perfecture}', 'PlaceController@index');
Route::get('/perfectures', 'PerfectureController@index');
Route::get('/places/{perfecture}/{place}', 'PlaceController@show');
Route::delete('/places/{perfecture}/{place}', 'PlaceController@destroy');
Route::post('/places', 'PlaceController@store');

Route::post('/places/{perfecture}/{place}/comments', 'CommentController@store');
Route::post('/comments/{comment}/favorites', 'FavoriteController@store');
Route::delete('/comments/{comment}/favorites', 'FavoriteController@destroy');
Route::delete('/comments/{comment}', 'CommentController@update');
Route::delete('/comments/{comment}', 'CommentController@destroy');
Route::get('/profiles/{user}', 'ProfilesController@show');

Route::post('/upload', 'AvatarImgController@upload')->name('upload');
Route::get('/img', 'PlaceController@carousel');


Route::post('api/users/{user}/avatar', 'AvatarController@store')->name('avatar');

});

