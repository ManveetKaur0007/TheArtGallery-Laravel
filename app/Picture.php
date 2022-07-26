<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    //use SoftDeletes;
    //protected $dates =['deleted_at'];

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    protected $fillable = [
        "name",
        "body",
        "author_id",
        "gallery_id"
    ];
    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }
}
