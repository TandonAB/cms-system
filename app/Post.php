<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = [];

    protected $fillable = ['user_id', 'title', 'post_image', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
