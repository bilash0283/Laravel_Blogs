<?php

use App\Http\Controllers\blog_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog-create',[blog_controller::class,'blog_create'])->name('blog_create');
