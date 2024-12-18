<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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