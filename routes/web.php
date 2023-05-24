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
/*  МАРШРУТИЗАТОР НА ГЛАВНУЮ СТРАНИЦУ ВЕЛКОМ.ПХП
Route::get('/', function () {
    return view('welcome');
});
*/
/*МАРШРУТ НА ГЛАВНУЮ */
Route::get('/', function () {
    return view('index');
});



/*МАРШРУТ НА ЛК */
Route::get('/account', function () {
    return view('account');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
