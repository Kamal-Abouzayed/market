<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {

    /* Auth Routes */
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    /* Dashboard Routes */
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/dashboard', function () {
            return view('dashboard.layouts.app');
        })->name('admin.dashboard');

        /* Settings Routes */
        Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings');
        Route::post('/settings', [SettingController::class, 'update'])->name('admin.settings.update');

        /* Categories Routses */
        Route::prefix('categories')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('admin.categories.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
            Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
            Route::post('/update', [CategoryController::class, 'update'])->name('admin.categories.update');
            Route::get('/{id}/delete', [CategoryController::class, 'delete'])->name('admin.categories.delete');
        });
    });
});
