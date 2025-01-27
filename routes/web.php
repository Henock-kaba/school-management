<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/service', function(){
    return view('pages.service');
});
Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/contact', function(){
    return view('pages.contact');
});
