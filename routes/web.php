<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomePageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('about-us', 'aboutUs')->name('about.us');
    Route::get('contact-us', 'contactUs')->name('contact.us');
});

Route::controller(StoryController::class)->group(function () {
    Route::get('story/1', 'show');
});
