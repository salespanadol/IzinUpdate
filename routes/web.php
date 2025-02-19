<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IzinController;

Route::get('/', [HomeController::class, 'index']); // Home page
Route::get('/form', [FormController::class, 'create']); // Form page
Route::get('/profile', [ProfileController::class, 'index']); // Profile page
Route::post('/submit-form', [FormController::class, 'store']); // Store form data
Route::get('/login', [LoginController::class, 'index']); // Login page
Route::get('izin/edit/{id}', [IzinController::class, 'edit'])->name('izin.edit');
Route::put('/izin/update/{id}', [IzinController::class, 'update'])->name('izin.update');
Route::delete('/izin/delete/{id}', [IzinController::class, 'destroy'])->name('izin.destroy');
