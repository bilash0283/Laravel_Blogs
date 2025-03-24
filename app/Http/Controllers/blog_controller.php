<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use function Termwind\render;
use Illuminate\Support\Facades\DB;

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
        DB::table('blogs')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'status' => $request->status,
        ]);
    }
}
