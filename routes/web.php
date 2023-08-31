<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "email" => "darrielmarkerizal@gmail.com",
        "name" => "Darriel Markerizal"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "email" => "darrielmarkerizal@gmail.com",
        "name" => "Darriel Markerizal"
    ]);
});

Route::get('/blog', function () {
    return view('blog');
});
