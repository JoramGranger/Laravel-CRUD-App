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
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');

/* Route::get('/hello', function (){
    return '<h1>hello world</h1>';
}); */

/* route */
/* Route::get('/about', function () {
    return view('pages.about');
});
/* dynamic route */

/* Route::get('/users/{id}/{name}', function($id, $name){
   return 'this is user '.$id . 'name ' .$name;
}); */

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
