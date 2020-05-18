<?php

use App\Http\Controllers\BookController;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('books','BookController')->middleware('auth');
Route::resource('categories','CategoryController')->middleware('auth');
Route::get('/facebook/redirect', 'SocialAuthController@redirect');
Route::get('/facebook/callback', 'SocialAuthController@callback');
<<<<<<< HEAD
Route::resource('adminBooks','AdminBookController')->middleware('auth');
Route::resource('profiles','ProfileController');
=======
Route::get('/userbooks', 'BorrowController@index')->name('userbooks');
Route::resource('adminBooks','AdminBookController')->middleware('auth');
>>>>>>> cf33edcbf00902b7e5d2fb8f9962237fc93cd2ee
