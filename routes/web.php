<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Jobs\PaymentJob;
use App\Jobs\TesteJob;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/about", [AboutController::class, 'index'])->name('home');
Route::get('/payment', function () {
    $user = Auth::user();
    PaymentJob::dispatch($user)->delay(now()->addSeconds(5))->onQueue('payments');
    TesteJob::dispatch();
});

Route::get('/product', function () {
    $product = App\Models\Product::all();
    $product_max = App\Models\Product::max('price');
    $product_min = App\Models\Product::mim('price');
    $product_sum = App\Models\Product::sum('price');
    $product_media = App\Models\Product::avg('price');

    return response()->json($product_media);
});

Route::get('/client', function () {
    // $client = App\Models\Client::find(1)->phone;
    // $client = App\Models\Client::with('phone')->find(1);
    $client = App\Models\Client::with('phones')->find(1);

    return response()->json($client);
});

Route::get('/query', function () {
    // $client = App\Models\Client::with('phones')->find(1);
    // $phones = $client->phones()->where('phone_number', 'like', '8%')->get();
    // return response()->json($phones);

    $client = App\Models\Client::find(1);
    $products = $client->products()
        ->where('price', '>', 50)
        ->distinct()
        ->orderBy('product_name', 'ASC')
        ->get();

    return response()->json($products);
});

Route::get('/many', function () {
    // $client = App\Models\Client::find(1);
    // $products = $client->products;

    $product = App\Models\Product::find(1);
    $clients = $product->clients;

    return response()->json($clients);
});