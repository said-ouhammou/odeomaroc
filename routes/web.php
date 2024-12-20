<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/solutions', function () {
    return view('solution');
});

Route::get('/solutions/{slug}', [ListingsController::class,'index']);

Route::get('/politique-de-protection-de-la-vie-privee', function () {
    return view('privacy-policy');
});

Route::get('/condition-generale', function () {
    return view('terms');
});

Route::get('/a-propos', function () {
    return view('about');
});


Route::get('/faq', function () {
    return view('faq');
});


Route::get('/:slug', function () {
    return view('product-details');
});