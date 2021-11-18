<?php

use Illuminate\Support\Facades\Routes;

Route::get('/', function() {
    return view('home');
});

Route::get('/about-us', function() {
    return view('about-us');
});