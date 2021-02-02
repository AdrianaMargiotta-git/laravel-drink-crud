<?php

use App\Http\Controllers\DeviceController;
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

Route::get('/', 'DrinkController@index') -> name('home-drinks');

Route::get('/show/{id}', 'DrinkController@show') -> name('drinks-show');

Route::get('/create', 'DrinkController@create') -> name('drinks-create');

Route::post('/store', 'DrinkController@store') -> name('store-drinks');
