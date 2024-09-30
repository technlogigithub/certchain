<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('/about-us', [FrontendController::class, 'about'])->name('about-us');
    Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact-us');
    Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
    Route::get('/blog-details/{id}', [FrontendController::class, 'blog_details'])->name('blog-details');
    Route::get('/client', [FrontendController::class, 'client'])->name('client');
    Route::get('solution/{slug}', [SolutionController::class, 'show'])->name("solution-show");
    Route::post('/contact-us-store', [ContactController::class, 'store'])->name('contact-us-store');
});

