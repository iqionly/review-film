<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // Di Set ke genre salah nama, defaultnya sih namanya genres yah hehe
    protected $table = "genre";
    protected $guarded = ['id'];

    public function film()
    {
        return $this->hasMany('App\Models\Film');
    }
}
