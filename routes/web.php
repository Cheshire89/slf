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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Route::get('/property/{mlsId}', ['as' => 'property.mls', 'uses' => 'PagesController@property']);

Route::get('/agents', 'PagesController@agents');
Route::get('/services', 'PagesController@services');
Route::get('/testimonials', 'PagesController@testimonials');
Route::get('/contact', 'PagesController@contact');
Route::get('/sign-up', 'PagesController@signUp');
Route::get('/faq', 'PagesController@faq');
// Route::get('/test', function(){
//     dd();
// });


Route::resource('posts', 'PostsController');
