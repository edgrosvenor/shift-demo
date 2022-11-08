<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');
Route::get('about-me', \App\Http\Controllers\AboutMeController::class)->name('about-me');
Route::get('about-shift', \App\Http\Controllers\AboutShiftController::class)->name('about-shift');
Route::get('about-workbench', \App\Http\Controllers\AboutWorkbenchController::class)->name('about-workbench');
