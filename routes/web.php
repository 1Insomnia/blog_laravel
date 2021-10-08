<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', DashboardController::class);
});


// Public routes
Route::get('/', HomePageController::class)->name('home');
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('blog.show');

// Admin protected routes
Route::group(['middleware' => ['is_admin']], function () {
    //  Manage Blog Post
    Route::resource('/blog', PostController::class)
        ->except(['index', 'show']);
    Route::resource('/category', CategoryController::class)
        ->except([
            'index', 'show'
        ]);
});

require __DIR__ . '/auth.php';
