<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\useController;
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
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/contact', 'App\Http\Controllers\useController@create')->name('contact');
Route::post('/contact', 'App\Http\Controllers\useController@store')->name('contact');

Route::get('/', 'App\Http\Controllers\useController@acceuil')->name('acceuil');

Route::get('/apropos', 'App\Http\Controllers\useController@apropos')->name('apropos');

Route::get('/service', 'App\Http\Controllers\useController@service')->name('service');

Route::get('/tarif', 'App\Http\Controllers\useController@tarif')->name('tarif');

Route::get('/liste', 'App\Http\Controllers\useController@liste')->name('liste');

Route::resource('cars', 'messageController');
Route::get('/edit', 'App\Http\Controllers\useController@edit')->name('edit');


