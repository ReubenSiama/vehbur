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
    Route::get('/', 'index');
});

Route::controller(StoryController::class)->group(function () {
    Route::get('story/1', 'show');
});
