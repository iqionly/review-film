<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
