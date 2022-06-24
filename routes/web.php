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

Route::get('/flights','MainController@Categories');
Route::get('/contest-details','MainController@Contest_Details');
Route::get('/home','MainController@Index');
Route::get('/contests','MainController@Contest');
Route::get('/gallary ','MainController@Users');
Route::get('/add','MainController@Add');
Route::get('/addpartner','Maincontroller@partner');
Route::post('/addpartner','Maincontroller@Addpart')->name('partner');
Route::post('/addto','MainController@AddToDB')->name('airline');
Route::get('/del/{id}','MainController@DelFoDB');

Auth::routes();

