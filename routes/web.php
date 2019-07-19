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
Route::get('/siswa', function () {
    return view('/siswa');
});
Route::group(['middleware' => 'cors'],function(){
    Route::resource('/artikel', 'ArtikelAjax');
    Route::resource('/kategori', 'KategoriAjax');
    Route::resource('/tag', 'TagAjax');
});

Route::get('/', function () {
    return view('/index');
});
Route::get('/contact', function () {
    return view('/contact');   
});
Route::get('/about', function () {
    return view('/about'); 
});
Route::get('/menu', function () {
    return view('/menu');
});
Route::get('/blog', function () {
    return view('/blog');
});
Route::get('/single-blog', function () {
    return view('/single-blog');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('artikel', 'ArtikelController');
Route::resource('categori', 'CategoriController');
Route::resource('tag', 'TagController');

Route::resource('/', 'FrontendController');
Route::get('/blog/', 'FrontendController@allblog')->name('blog');
Route::get('/blog/{artikel}', 'FrontendController@detailblog')->name('single-blog');
// Route::get('/news/{artikel}', 'FrontendController@detailblog')->name('single');
Route::get('/category/{cat}', 'FrontendController@blogcat')->name('category');
Route::get('/tag/{tag}', 'FrontendController@blogtag')->name('tag');

