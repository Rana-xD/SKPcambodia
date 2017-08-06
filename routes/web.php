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
  Route::get('/', 'PageController@home');
  Route::get('/contacts', 'PageController@contact');
  Route::get('/about','PageController@about');
  Route::get('/team','PageController@team');
  Route::get('/services','PageController@service');
  Route::get('/report','PageController@report');
  Route::get('/blog','PageController@blog');
  Route::get('/blog/{slug}','PageController@blogDetail')->name('visitor.blog.detail');
  Route::get('/publication','PageController@publication');
  Route::get('/law','PageController@law');
  Route::get('/announcement','PageController@announcement');
  Route::get('/training','PageController@training');
  Route::get('/employment_and_internship','PageController@employment');
  Route::get('/mission','PageController@mission');
  Route::get('/teamsingle','PageController@teamsingle');
  Route::post('/mail','System@sendmail');
});

Route::get('locale/{localeId?}','LocaleController@locales');
Route::get('PDF/{path}/{filename}','System@downloadpdf');
Route::post('/mail','System@sendmail');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
