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
Route::get('/blog_details', function () {
    return view('frontend.blog_details');
});
Route::get('/team', function () {
    return view('frontend.team');
});
Route::get('/team_details', function () {
    return view('frontend.team_details');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/404', function () {
    return view('frontend.404');
});
Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});
Route::get('/portfolio_details', function () {
    return view('frontend.portfolio_details');
});
Route::get('/shop', function () {
    return view('frontend.shop');
});
