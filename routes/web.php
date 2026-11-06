<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DishController;

Route::get('/say/{message?}', [SiteController::class, 'say'])->name('site.say');

Route::get('/', function () {return view('welcome');});
Route::get('/entry', [SiteController::class, 'entry'])->name('entry.form');
Route::post('/entry', [SiteController::class, 'entryStore'])->name('entry.store');
Route::view('/about', 'site.about')->name('site.about');
Route::view('/contact', 'site.contact')->name('site.contact');
Route::view('/menu', 'site.menu')->name('site.menu');
Route::get('/booking', [SiteController::class, 'booking'])->name('site.booking');
Route::get('/booking', [SiteController::class, 'booking'])->name('site.booking');
Route::post('/booking', [SiteController::class, 'bookingStore'])->name('site.booking.store');
Route::resource('country', CountryController::class);
Route::resource('dish', DishController::class);
