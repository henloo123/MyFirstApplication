<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'activePage' => 'home'
    ]);
});

// For the About page
Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us',
        'activePage' => 'about'
    ]);
});

// For the Contact page
Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'activePage' => 'contact'
    ]);
});