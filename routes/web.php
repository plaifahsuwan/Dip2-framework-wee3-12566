<?php

use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    return view('welcome');
});

Route::get('/About',function (){
    // return 'About page';
    return view('About');
});

Route::get('/post', function () {
    // return 'post page';
    return view('About');
});
Route::get('/profile', function () {
    // return 'profile page';
    return view('About');
});
Route::get('/contact', function () {
    // return view('contact');
    return view('contact');
});