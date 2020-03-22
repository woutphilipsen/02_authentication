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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'PagesController@home');

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::get('payments/create', 'PaymentsController@create')->middleware('auth');
Route::post('payments', 'PaymentsController@store')->middleware('auth');
Route::get('notifications', 'UserNotificationsController@show')->middleware('auth');

Route::get('conversations', 'ConversationsController@index');
Route::get('conversations/{conversation}', 'ConversationsController@show');

Auth::routes();