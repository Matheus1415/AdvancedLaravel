<?php

use App\Events\Checkout;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/about", [AboutController::class, 'index'])->name('home');
Route::post('/pay', function (Request $request) {

    // Event(new Checkout($request->except('_token')));
    Checkout::dispatch($request->except('_token'));
});