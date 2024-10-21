<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PrepodavatelController;
use App\Http\Controllers\CalculatorController;

Route::post('/calculate', [CalculatorController::class, 'calculate']);

Route::get('/prepodavateli', [PrepodavatelController::class, 'index'])->name('prepodavateli.index');
Route::get('/prepodavateli/create', [PrepodavatelController::class, 'create'])->name('prepodavateli.create');
Route::post('/prepodavateli', [PrepodavatelController::class, 'store'])->name('prepodavateli.store');
Route::get('/prepodavateli/{id}/edit', [PrepodavatelController::class, 'edit'])->name('prepodavateli.edit');
Route::put('/prepodavateli/{id}', [PrepodavatelController::class, 'update'])->name('prepodavateli.update');
Route::delete('/prepodavateli/{id}', [PrepodavatelController::class, 'destroy'])->name('prepodavateli.destroy');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
