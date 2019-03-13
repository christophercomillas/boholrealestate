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

Route::get('/', function () {
    $data['title'] = 'Bohol Real Estate - Home';
    return view('pages.home')->with($data);
});

Auth::routes();

Route::get('/aboutus', function () {
    $data['title'] = 'Bohol Real Estate - About Us';
    return view('pages.aboutus')->with($data);
});

Route::get('/property', function () {
    $data['title'] = 'Bohol Real Estate - Properties';
    return view('pages.property')->with($data);
});

Route::get('/properties', function () {
    $data['title'] = 'Bohol Real Estate - Properties';
    return view('pages.properties')->with($data);
});

Route::get('/news', function () {
    $data['title'] = 'Bohol Real Estate - News';
    return view('pages.news')->with($data);
});

Route::get('/contact', function () {
    $data['title'] = 'Bohol Real Estate - Contact';
    return view('pages.contact')->with($data);
});

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('contact','HomeController@contact');
Route::post('/contact','HomeController@contactUs')->name('contact');

Route::get('/test', 'HomeController@test')->name('test');






