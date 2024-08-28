<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/content', function () {
    return view('content');
})->name('content');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');