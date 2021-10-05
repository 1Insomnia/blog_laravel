<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', HomePageController::class)->name('home');

require __DIR__.'/auth.php';