<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use function Termwind\render;
use Illuminate\Support\Facades\DB;

class blog_controller extends Controller
{
    
    public function index()
    {
        view('home');
    }

    public function create()
    {
       return view('add-blog');
    }

    public function store(Request $request)
    {
        dd($request);
    }
    
}




