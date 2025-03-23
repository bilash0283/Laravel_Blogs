<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\render;

class blog_controller extends Controller
{
    public function add_blog()
    {
       view('add-blog');
    }
}
