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


/*
 * Pages Routes
 * */
Route::get('about', 'PagesController@getAbout')->name('page.about');

Route::get('contact', 'PagesController@getContact')->name('page.contact');

Route::get('/', 'PagesController@getIndex');

//this name to call this route anywhere by route function
Route::get('blog/{slug}', 'BlogController@getSingle')->where('slug', '[\w\d\-\_]+')->name('blog.single');

Route::get('blog', 'BlogController@getIndex')->name('blog.index');

/*
 * Post Routes
 * */

Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
