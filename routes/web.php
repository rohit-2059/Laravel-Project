<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{name}', function ($name) {
    return "Hello " . $name;
});
Route::get('/about', function () {
    return "This is the About Page";
});


Route::get('/home', function () {
    return view('home') ;
});


/// defaut parameter
Route::get('/user/{name?}', function ($name = "Guest") {
    return "Hello " . $name;
});


/// add two numbers
Route::get('/add/{num1}/{num2}', function ($num1, $num2) {
    return $num1 + $num2;
});
Route::get('/download', function () {
    return response()->download(public_path('files/sample.pdf'));
});