<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SettingsController;
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
})->name('home');

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/account', [DashboardController::class, 'account'])->name('account');
    Route::prefix('settings')->name('settings.')->group(function() {
        Route::get('/', [SettingsController::class, 'index'])->name('index');
    });
    Route::get('/qr', function(){
        return auth()->user()->twoFactorQrCodeSvg();
    });
});
