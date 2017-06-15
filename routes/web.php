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


Route::group(['middleware' =>'locale'],function(){
  Route::get('/', 'routing@home');
  Route::get('/contacts', 'routing@contact');
  Route::get('/about','routing@about');
  Route::get('/team','routing@team');
  Route::get('/services','routing@service');
  Route::get('/report','routing@report');
  Route::get('/blog','routing@blog');
  Route::get('/publication','routing@publication');
  Route::get('/law','routing@law');
  Route::get('/announcement','routing@announcement');
  Route::get('/training','routing@training');
  Route::get('/employment&internship','routing@employment');
  Route::get('/mission','routing@mission');
  Route::get('/teamsingle','routing@teamsingle');
});

Route::get('locale/{localeId?}','locale@locales');
Route::get('PDF/{path}/{filename}','system@downloadpdf');
