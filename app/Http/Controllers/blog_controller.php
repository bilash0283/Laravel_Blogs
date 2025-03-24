<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\render;
use App\Models\blog_model;

class blog_controller extends Controller
{
    public function add_blog()
    {
        view('add-blog');
    }

    public function index()
    {
        view('home');
    }

    public function store(Request $request)
    {
        $model = new blog_model();
        return $model->store_blog_data($request);

    }

}
