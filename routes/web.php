<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/news', function () { return view('news'); })->name('news');
Route::get('/contact', function () { return view('contact'); })->name('contact');
