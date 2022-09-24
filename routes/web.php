<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;

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

Route::group(['prefix' => 'admin'], function() {
    // news
    Route::get('news/create', 'App\Http\Controllers\Admin\NewsController@add');
    // profile
    Route::get('profile/create', 'App\Http\Controllers\Admin\ProfileController@add');
    Route::get('profile/edit', 'App\Http\Controllers\Admin\ProfileController@edit');
});
