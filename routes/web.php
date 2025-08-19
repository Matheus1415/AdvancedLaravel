<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginGoogleController;
use App\Jobs\PaymentJob;
use App\Jobs\TesteJob;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/home", [AboutController::class, 'index'])->name('home');
Route::get('/payment', function () {
    $user = Auth::user();
    PaymentJob::dispatch($user)->delay(now()->addSeconds(5))->onQueue('payments');
    TesteJob::dispatch();   
});

Route::get('/login', [LoginGoogleController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);
Route::get('/logout', [LoginGoogleController::class, 'logout']);