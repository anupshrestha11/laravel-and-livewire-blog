<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image_path',
        'status',
        'type',
        'comment_count',
        'published_at',
        'views',
    ];

}
