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

Route::get('/', [
    'uses'  =>  'front\IndexController@index',
    'as'    =>  'index'
]);
Route::get('/blog', [
    'uses'  =>  'front\IndexController@blog',
    'as'    =>  'blog'
]);
Route::get('/blog/single/{id}', [
    'uses'  =>  'front\IndexController@single',
    'as'    =>  'blog_single'
]);

Route::get('/contact', [
    'uses'  =>  'front\ContactController@index',
    'as'    =>  'contact'
]);

Route::get('/blog/new/{id}', [
    'uses'  =>  'front\IndexController@newBlog',
    'as'    =>  'newblog'
]);


// localization
// use Session;
Route::get('/locale/{locale}', function($locale){
    Session::put('locale', $locale);

    return redirect()->back();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


