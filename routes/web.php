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

Route::view('counter', 'pages.counter')->name('counter');
Route::view('clock', 'pages.clock')->name('clock');
Route::view('slug', 'pages.slug')->name('slug');
Route::view('todo', 'pages.todo')->name('todo');
Route::view('online-offline', 'pages.online_offline')->name('online-offline');
