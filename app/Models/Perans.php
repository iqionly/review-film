<?php

namespace App\Models;

use App\Models\Film;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perans extends Model
{
    //
    protected $table = 'peran';

    public function film()
    {
        return $this->belongsTo('App\Models\Film');
    }

    
    public function cast()
    {
        return $this->belongsTo('App\Models\Cast');
    }
}
