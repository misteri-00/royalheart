<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonateController;

/*
|--------------------------------------------------------------------------
| Web Routes - RoyalHeart
|--------------------------------------------------------------------------
*/

// Landing Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::prefix('causes')->name('causes.')->group(function () {
    Route::get('/', [CauseController::class, 'index'])->name('index');
    Route::get('/detail', [CauseController::class, 'detail'])->name('detail');
});

Route::prefix('events')->name('events.')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('/detail', [EventController::class, 'detail'])->name('detail');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/donate', [DonateController::class, 'index'])->name('donate');
