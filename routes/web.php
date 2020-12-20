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

Route::get('/', function () {
    return view('welcome');
});


/* Route::get('/hello', function () {
  return "<h1>Hello<h1>";
}); 

Route::get('/users/{id}/{name}', function ($id,$name) {
  return 'This is user '.$id.$name;
}); 
*/

Route::get('/', 'PagesController@index'); 
Route::get('/about', 'PagesController@about'); 
Route::get('/services', 'PagesController@services'); 

/* Route::get('/about', function () {
  return view('pages.about');
});  */


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
