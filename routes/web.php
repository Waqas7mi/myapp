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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/' , 'PortfolioController@index')->name('portfolio');

// Routes for Blogs

Route::get('/blog' , 'BlogController@index')->name('blog.index');
Route::get('/contact' , 'ContactController@create')->name('contact.create');
Route::post('/contact' , 'ContactController@contact_us')->name('contact-us');






Route::get('pdf' , 'BlogController@pdf')->name('pdf');
Route::get('/downlaod' , function (){

    return response()->download('C:\laragon\www\portfolio\public\storage\cv\cv.pdf');
})->name('pdf.download');



