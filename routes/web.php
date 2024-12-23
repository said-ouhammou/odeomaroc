<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TechnologiesController;
use App\Http\Controllers\partenairesController;

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

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/technologies', function () {
    return view('technologies');
});

Route::get('/technologies', [TechnologiesController::class, 'technologies']);

Route::get('/partenaires', function () {
    return view('partenaires');
});

Route::get('/partenaires', [partenairesController::class, 'partenairesList']);



