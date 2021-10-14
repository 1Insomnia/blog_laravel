<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', DashboardController::class);
});

// Public routes
Route::get('/', HomePageController::class)->name('home');

// BLOG
Route::prefix('blog')->group(function () {
    Route::resource('/post', PostController::class);
    Route::resource('/category', CategoryController::class);
});

require __DIR__ . '/auth.php';
