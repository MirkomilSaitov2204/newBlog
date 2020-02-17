<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post;

class Tag extends Model
{
    protected $fillable=['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
