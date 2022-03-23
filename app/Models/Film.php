<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $table = "film";

    // Get Genre the film
    // One to many (inverse)
    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
}
