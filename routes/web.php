<?php

use App\Http\Controllers\blog_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/createBlog ',[blog_controller::class,'add_blog'])->name('blog_create');
Route::get('/manage-blogs',[blog_controller::class,'index'])->name('blogs-manage');
Route::post('/store-blogs',[blog_controller::class,'store'])->name('create_blog');


Route::get('/blog',function(){
    return view('add-blog');
});
