<?php

namespace App\Models;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Model;

class blog_model extends Model
{
    public function store_blog_data($blog)
    {
        Create::class->all();
    }
}
