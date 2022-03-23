<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Di Set ke genre salah nama, defaultnya sih namanya genres yah hehe
    protected $table = "profile";
    protected $guarded = ['id'];

    public function profile()
    {
        
    }
}
