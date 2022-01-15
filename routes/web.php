<?php

use Illuminate\Support\Facades\Routes;

Route::view('/', 'pages/home')->name('home');

Route::get('/about-us', function() {
    return view('pages/about-us');
})->name('about');