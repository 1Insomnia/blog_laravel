<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', HomePageController::class)->name('home');

Route::get('/blog', [PostController::class, 'index'])->name('post.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('post.create');
Route::post('/blog/store', [PostController::class, 'store'])->name('post.store');
// Route::group(['middleware' => ['can:post_create']], function () {});

require __DIR__.'/auth.php';