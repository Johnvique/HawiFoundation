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

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/causes', function () {
    return view('causes');
});

Route::get('/what_we_do', function () {
    return view('what_we_do');
});

Route::get('/hawi_hospital', function () {
    return view('hawi_hospital');
});
Route::get('/talk_to_us', function () {
    return view('talk_to_us');
});

Route::get('/our_projects', function () {
    return view('our_projects');
});

Route::get('/get_involved', function () {
    return view('get_involved');
});

Route::get('/our_events', function () {
    return view('our_events');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
