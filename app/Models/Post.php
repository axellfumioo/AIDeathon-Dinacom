<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'user_id',
        'post_id',
        'content',
        'image',
        'activity_type',
        'like_count',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
