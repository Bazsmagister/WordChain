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
    return view('welcome');
});

/*
Route::get('/', function () {
    return view('words');
});
*/

Route::get('/game', function () {
    return view('game');
});

Route::post('/game', function () {
    return view('game');
});

Route::get('/about_me', function () {
    return view('about_me');

});

/*
Route::get('/words', function () {
    return view('words');
});
*/



Route::resource('words', 'WordController');

Route::get('ajaxRequest', 'WordController@ajaxRequest');

