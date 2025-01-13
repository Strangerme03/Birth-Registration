<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\BirthRegistrationController;
Route::middleware('auth')->group(function () {
    Route::get('/birth-registration/create', [BirthRegistrationController::class, 'create'])->name('birth_registration.create');
    Route::post('/birth-registration', [BirthRegistrationController::class, 'store'])->name('birth_registration.store');
    Route::get('/birth-registration/{token}', [BirthRegistrationController::class, 'show'])->name('birth_registration.show');
});


use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\LoginController;

Route::get('/auth/google', [LoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback']);



require __DIR__.'/auth.php';
