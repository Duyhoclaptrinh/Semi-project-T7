<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
$content = Post::find(10)->post_content;