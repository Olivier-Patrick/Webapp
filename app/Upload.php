<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = ['post_id', 'filename'];
    public function upload()
    {
        return $this->belongsTo('App\Post');
    }
}
