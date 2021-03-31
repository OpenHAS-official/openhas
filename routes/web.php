<?php

use App\Helpers\Session;
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
    return view('admin.home');
})->middleware('verified')->name('home');

Route::prefix('account')->middleware('verified')->group(function(){
    Route::get('/', function(){
        return view('admin.account.index');
    })->name('account.index');
    Route::get('security', function(Request $request){
        return view('admin.account.security', ['sessions' => Session::getCurrentUser()]);
    })->name('account.security')->middleware('password.confirm');
    Route::get('address', function(){
        return view('admin.account.address');
    })->name('account.address');
    Route::get('preferences', function(){
        return view('admin.account.preferences');
    })->name('account.preferences');
});
