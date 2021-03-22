<?php

use Illuminate\Http\Request;
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

Route::get('/home', function(){
    return view('clientarea.home');
})->middleware('verified');
    Route::get('address', function(){
        return view('admin.account.address');
    })->name('account.address');
    Route::get('preferences', function(){
        return view('admin.account.preferences');
    })->name('account.preferences');
