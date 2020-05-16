<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
//Route::get(md5('/home'),'customController@home')->name('home');  (encription)
Route::get('/home','customController@home')->name('home');
Route::get('write/post','customController@post')->name('post');

/* categoey */
Route::get('add/category','customController@AddCategory')->name('AddCategory');
Route::post('store/category','customController@StoreCategory')->name('StoreCategory');
Route::get('all/category','customController@AllCategory')->name('AllCategory');
Route::get('view/category/{id}','customController@ViewCategory')->name('ViewCategory');



Route::get('/contact','customController@contact')->middleware('age');
