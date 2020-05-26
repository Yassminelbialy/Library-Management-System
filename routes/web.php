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
Route::resource('borrow','BorrowController')->middleware('auth');
Route::resource('books','BookController')->middleware('auth');
Route::resource('categories','CategoryController')->middleware('auth');
Route::get('/facebook/redirect', 'SocialAuthController@redirect');
Route::get('/facebook/callback', 'SocialAuthController@callback');
Route::resource('adminBooks','AdminBookController')->middleware('auth');
Route::resource('users','UserController')->middleware('auth');
Route::resource('trash','TrashController')->middleware('auth');
Route::resource('admins','AdminController')->middleware('auth');
Route::get('/userbooks', 'BorrowController@index')->name('userbooks');
Route::resource('profiles','ProfileController');
Route::post('/rates','RateController@store');
Route::get('/rates','RateController@index');


Route::post('/favor', [ 
    'uses'=>'FavoriteController@bookFavBook',
    'as'=>'favor'
]);
Route::get('favorites','FavoriteController@index')->name('listfavourits');


