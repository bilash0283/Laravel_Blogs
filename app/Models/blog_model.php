<?php

namespace App\Models;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class blog_model extends Model
{
    public function store_blog_data($blog)
    {
        DB::table('blogs')->insert([
            'title' => $blog->title,
            'description' => $blog->description,
            'image' => $blog->image,
            'status' => $blog->status,
        ]);
    }
}
