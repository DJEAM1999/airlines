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
Route::get('/req','MainController@Requstes');
Route::get('/home','MainController@Index');
Route::get('/contests','MainController@Contest');
Route::get('/partners ','MainController@Users');
Route::get('/add','MainController@Add');
Route::get('/addpartner','Maincontroller@partner');
Route::post('/addpartner','Maincontroller@Addpart')->name('partner');
Route::post('/addto','MainController@AddToDB')->name('airline');
Route::get('/del/{id}','MainController@DelFoDB');
Route::get('/delpar/{id}','MainController@delpar');
Route::get('/editFlight/{id}','MainController@editFlight');
Route::post('/updateflight/{id}','MainController@updateFlight');
Route::post('/updatepartner/{id}','MainController@updatePartner');
Route::get('/editpartner/{id}','MainController@editPartner');
Route::get('/searchFlight','MainController@searchFlight')->name('searchFlight');
Route::get('/searchPartner','MainController@searchPartner')->name('searchPartner');
Route::get('/reservation/{id}','MainController@reservation');
Route::get('/reservationdel/{id}','MainController@reservationdel');

Route::get('/admin','MainController@admin');


Auth::routes();

