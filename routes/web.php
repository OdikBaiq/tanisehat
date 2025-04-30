<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});
