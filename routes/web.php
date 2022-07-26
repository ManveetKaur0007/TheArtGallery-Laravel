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

Route::get('contact', function (){
    $email = "w0781503@myscc.ca";
    return view('pages/contact', compact("email"));
})->name('contact.show');

Route::get('about', function () {
    return view('about');
});

Route::resource('galleries', 'GalleryController');
//Route::get('galleries','GalleryController@index')->name('galleries.index');
//Route::get('galleries/create','GalleryController@create')->name('galleries.create');
//Route::get('galleries/{gallery}','GalleryController@show')->name('galleries.show');
//Route::get('galleries/{gallery}/edit','GalleryController@edit')->name('galleries.edit');
//Route::post('galleries/','GalleryController@store')->name('galleries.store');
//Route::patch('galleries/{gallery}', 'GalleryController@update')->name('galleries.update');
//Route::delete('galleries/{gallery}','GalleryController@destroy')->name('galleries.delete');

Route::resource('pictures','PictureController');
//Route::get('pictures/create','PictureController@create')->name('pictures.create');
//Route::post('pictures/','PictureController@store')->name('pictures.store');
//Route::get('pictures','PictureController@index')->name('pictures.index');
//Route::get('pictures/{picture}','PictureController@show')->name('pictures.show');
//Route::delete('pictures/{picture}','PictureController@destroy')->name('pictures.delete');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('galleries/manage','GalleryController@showDeleted')->name('galleries.showDeleted');
Route::get('galleries/{gallery}/forceDelete','GalleryController@forceDelete')->name('galleries.forceDeleted');
Route::get('galleries/{gallery}/restore','GalleryController@restore')->name('galleries.restore');


