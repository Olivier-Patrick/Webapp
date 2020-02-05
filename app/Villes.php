<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Region;

class Villes extends Model
{
    public function region(){
        return $this->belongsTo('App\Region');
    }

    protected $fillable = ['name','region_id',];
}
