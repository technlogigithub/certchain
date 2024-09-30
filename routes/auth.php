<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GelleryController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('admin')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('add-blog', [BlogController::class, 'create'])->name("add-blog");
    Route::get('blog', [BlogController::class, 'index'])->name("admin.blog");
    Route::post('blog-store', [BlogController::class, 'store'])->name("blog-store");
    Route::post('blog-update', [BlogController::class, 'update'])->name("blog-update");
    Route::get('blog-edit/{id}', [BlogController::class, 'edit']);
    Route::get('blog-delete/{id}', [BlogController::class, 'destroy']);
   // Faq
    Route::get('add-faq', [FaqController::class, 'create'])->name("page.add");
    Route::get('faq', [FaqController::class, 'index'])->name("page.faq");
    Route::post('faq-store', [FaqController::class, 'store'])->name("faq-store");
    Route::post('faq-update', [FaqController::class, 'update'])->name("faq-update");
    Route::get('faq-edit/{id}', [FaqController::class, 'edit']);
    Route::get('faq-delete/{id}', [FaqController::class, 'destroy']);
   // gellery
    Route::get('add-gellery', [GelleryController::class, 'create'])->name("add-gellery");
    Route::get('gellery', [GelleryController::class, 'index'])->name("gellery");
    Route::post('gellery-store', [GelleryController::class, 'store'])->name("gellery-store");
    Route::post('gellery-update', [GelleryController::class, 'update'])->name("gellery-update");
    Route::get('gellery-edit/{id}', [GelleryController::class, 'edit']);
    Route::get('gellery-delete/{id}', [GelleryController::class, 'destroy']);

   // Testimonial
    Route::get('add-testimonial', [TestimonialController::class, 'create'])->name("add-testimonial");
    Route::get('testimonial', [TestimonialController::class, 'index'])->name("testimonial");
    Route::post('testimonial-store', [TestimonialController::class, 'store'])->name("testimonial-store");
    Route::post('testimonial-update', [TestimonialController::class, 'update'])->name("testimonial-update");
    Route::get('testimonial-edit/{id}', [TestimonialController::class, 'edit']);
    Route::get('testimonial-delete/{id}', [TestimonialController::class, 'destroy']);

    Route::get('home-page', [PageController::class, 'create'])->name("page.home");
    Route::post('home-page-store', [PageController::class, 'store'])->name("admin.home.store");
    Route::get('about-page', [PageController::class, 'create_about'])->name("page.about");
   
    Route::get('add-solution', [SolutionController::class, 'create'])->name("add-solution");
    Route::post('solution-page-store', [SolutionController::class, 'store'])->name("admin.solution.store");
    Route::get('solution', [SolutionController::class, 'index'])->name("solution");
    Route::get('solution-delete/{id}', [SolutionController::class, 'destroy'])->name("solution-delete");
    Route::get('solution-edit/{id}', [SolutionController::class, 'edit'])->name("solution-edit");
    

    //Contact
    Route::get('/contact', [ContactController::class, 'index'])->name("page.contact");
    Route::get('/contact-delete/{id}', [ContactController::class, 'destroy'])->name("contact");

    Route::get('dashboard', [PageController::class, 'dashboard'])->name("dashboard");

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
