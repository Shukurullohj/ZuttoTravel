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

Auth::routes();
Route::group(['middleware' => 'auth'], function() {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/places', 'PlaceController@index');
Route::get('/places/create', 'PlaceController@create');
Route::get('/places/{perfecture}', 'PlaceController@index');
Route::get('/perfectures', 'PerfectureController@index');
Route::get('/places/{perfecture}/{place}', 'PlaceController@show');
Route::post('/places', 'PlaceController@store');
Route::post('/places/{perfecture}/{place}/comments', 'CommentController@store');
});

