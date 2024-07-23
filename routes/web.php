<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\SubscribeController;
use App\Http\Controllers\Front\TeamController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get("/", [HomeController::class, 'index'])->name('index');

    Route::name('contact.')->prefix('contact')->group(function () {
        Route::get("/", [ContactController::class, 'index'])->name('index');
        Route::post("/store", [ContactController::class, 'store'])->name('store');
    });

    Route::get("/{parent}/{child?}", [CategoryController::class, 'index'])->name('category.index');

    Route::post("/subscribe", [SubscribeController::class, 'store'])->name('subscribe.store');
    Route::get("/about", [AboutController::class, 'index'])->name('about.index');
    Route::get("/team", [TeamController::class, 'index'])->name('team.index');
})->name('front.');
