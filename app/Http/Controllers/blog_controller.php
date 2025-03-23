<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\render;

class blog_controller extends Controller
{
    public function add_blog()
    {
       echo "this is page view for name of success";
    }

    public function index()
    {
        view('home');
    }

}
