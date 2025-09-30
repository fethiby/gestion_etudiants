<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.Acceuil');
});

Route::get('/about', function () {
    return view('home.About');

});Route::get('/contact', function () {
    return view('home.Contact');
});