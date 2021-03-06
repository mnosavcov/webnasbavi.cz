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

Route::view('/', 'hp')->name('homepage');
Route::post('/ajax/napiste-nam', 'AjaxController@napisteNam')->name('ajax--napiste-nam');
Route::view('o-nas', 'pages.o-nas')->name('o-nas');
Route::view('cenik', 'pages.cenik')->name('cenik');
Route::view('projekty', 'pages.projekty')->name('projekty');
Route::view('kontakt', 'pages.kontakt')->name('kontakt');
Route::view('ochrana-osobnich-udaju', 'pages.ochrana-osobnich-udaju')->name('ochrana-osobnich-udaju');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
