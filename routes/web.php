<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Public routes
Route::get('/', HomePageController::class)->name('home');
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');

// Admin protected routes
Route::group(['middleware' => ['is_admin']], function () {
//  Manage Blog Post
    Route::resource('/blog', PostController::class)
        ->except('index');
    Route::resource('/category', CategoryController::class)
        ->except([
            'index', 'show'
        ]);
});

require __DIR__ . '/auth.php';
