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

Route::get('/addBooks', function () {
    return view('addBooks');
});

Route::get('/browse','RioController@showBook');
Route::get('/borrow','RioController@showBorrow');

Route::post('/catalogue','RioController@addBook');
Route::post('/bookmodal','RioController@editBook');
Route::post('/bookreturnmodal','RioController@returnBook');
Route::post('/editmodal','RioController@editDetails');
Route::post('/deletemodal','RioController@deleteBook');
Route::post('/edited','RioController@editDetails2');
Route::post('/setBorrow','RioController@setBorrow')->name('setBorrow');
Route::post('/setReturn','RioController@setReturn')->name('setReturn');
Route::post('/deleteBook','RioController@deleteBook2')->name('deleteBook');
Route::get('/initialize','Magic@initial');