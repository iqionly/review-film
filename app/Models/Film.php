<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    // Fillable
    protected $fillable = ['judul', 'ringkasan', 'tahun', 'poster', 'genre_id'];

    // Nama Tables
    protected $table = "film";

    // Get Genre the film
    // One to many (inverse)
    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
}
