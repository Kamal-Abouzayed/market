<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {

    /* Auth Routes */
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    /* Dashboard Routes */
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', function () {
            return view('dashboard.layouts.app');
        })->name('admin.dashboard');
    });
});
