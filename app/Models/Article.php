<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     // Allow these fields to be filled using Article::create()
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'image',
        'content',
    ];
}
