<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Message extends Model
{
    protected $fillable = [
        'texte',
        'email',
        'post_id',
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }

}
