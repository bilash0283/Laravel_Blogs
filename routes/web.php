<?php

use App\Http\Controllers\blog_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/createBlog ',[blog_controller::class,'add_blog'])->name('blog_create');
