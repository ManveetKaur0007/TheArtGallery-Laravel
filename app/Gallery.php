<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @method static findOrFail($gallery)
 */
class Gallery extends Model
{
    use SoftDeletes;
    protected $dates =['deleted_at'];

    protected $fillable = [
        "name",
        "description"
    ];

    public function pictures(){
        return $this->hasMany(Picture::class);
    }
}
