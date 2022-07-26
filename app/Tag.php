<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function pictures(){
        return $this->belongsToMany(Picture::class)->withTimestamps();
    }
}
