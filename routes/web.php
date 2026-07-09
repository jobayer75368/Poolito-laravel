<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/service_details', function () {
    return view('frontend.service_details');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
