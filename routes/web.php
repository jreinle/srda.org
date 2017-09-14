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

Route::get('/')->uses('HomeController')->name('get.home');
Route::get('/about')->uses('AboutController')->name('get.about');
Route::get('/partnerships')->uses('PartnershipsController')->name('get.partnerships');
Route::get('/page/{page?}')->uses('GenericController')->name('get.generic');
Route::get('/curriculum')->uses('CurriculumController')->name('get.curriculum');

Route::post('/contact')->uses('ContactController@postContactForm')->name('post.contact');
