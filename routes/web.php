<?php

use Illuminate\Support\Facades\Route;

// Client-facing routes
Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/products/{id}', function ($id) {
    // In a real application, you would fetch the product from database
    $product = [
        'id' => $id,
        'title' => 'OEM Brake Pads - Honda Civic 2018',
        'price' => 89.99,
        'stock' => 15,
        'condition' => 'New',
        'category' => 'Brakes',
        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop',
    ];
    return view('products.show', ['product' => $product]);
});

Route::get('/cart', function () {
    return view('cart.index');
});

Route::get('/checkout', function () {
    return view('checkout.index');
});
