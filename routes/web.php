<?php

use App\Http\Controllers\ContactSubmissionController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePageController::class)->name('home');
Route::post('/contactos', [ContactSubmissionController::class, 'store'])->name('contact-submissions.store');
