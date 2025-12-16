<?php
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'process'])->name('login.process');
Route::get('/create-account', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/menu', [AuthController::class, 'menu'])->name('menu')->middleware('auth');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/menu', function () {
    return view('menu');
})->name('menu')->middleware('auth');
