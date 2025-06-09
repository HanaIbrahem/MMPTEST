<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Control\{ServiceController, QustionsController, ProductController, AboutController};
use App\Http\Controllers\Control\ContactController;
use App\Http\Controllers\Control\WebinarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


use App\Http\Middleware\SetLocale;

// Language switcher route
Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, config('app.available_locales', ['en', 'es']))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('language.switch');

// Apply locale middleware only to routes that need localization
Route::middleware([SetLocale::class])->group(function () {

    Route::get('/', [FrontendController::class, 'index']);
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/qustions', [FrontendController::class, 'qustions'])->name('qustions');
    Route::get('/services', [FrontendController::class, 'services'])->name('services');
    Route::get('/service/{service}', [FrontendController::class, 'service'])->name('service.show');
    Route::get('/products', [FrontendController::class, 'products'])->name('products');
    Route::get('/product/{product}', [FrontendController::class, 'product'])->name('product.show');

    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::post('/contact/store', [FrontendController::class, 'storcontact'])->name('contact.store');
   
    Route::get('/webinars', [FrontendController::class, 'Webinars'])->name('webinars');


    // ... other routes
});

// // admin routes  dashboard

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login/store', [AdminController::class, 'store'])->name('login.store');

// authenticated routes
Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::prefix('control')->as('control.')->middleware(['auth'])->group(function () {
    // resource routes
    Route::resource('/product', ProductController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/qustions', QustionsController::class);
    Route::resource('/webienars', WebinarController::class);
   
    // togle routes 
    Route::post('/qustions/{question}/toggle',[QustionsController::class,'toggle'])->name('qustions.toggle');
    Route::post('/webienars/{webinar}/toggle', [WebinarController::class, 'toggle'])->name('webienars.toggle');
    Route::post('/product/{product}/toggle', [ProductController::class, 'toggle'])->name('product.toggle');
    Route::post('/service/{service}/toggle', [ServiceController::class, 'toggle'])->name('service.toggle');
  
    // other routes
    Route::post('/settinges/update', [AdminController::class, 'update'])->name('settings.update');
    Route::get('/logout', [AdminController::class, 'destroy'])->name('logout');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::delete('/contact/{id}/delete', [ContactController::class, 'destroy'])->name('contact.destroy');
   
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::post('/about/update', [AboutController::class, 'update'])->name('about.update');

});


// authenticated routes
