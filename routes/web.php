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

Route::get('/', 'PagesController@root');

Route::get('/database', 'PagesController@database');

Route::get('/discrete-math', 'PagesController@discreteMath');

Route::get('/software-eng', 'PagesController@softwareEng');

