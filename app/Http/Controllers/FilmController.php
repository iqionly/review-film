<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    // Test connection
    public function index()
    {
        $query = Film::with('genre')->get();

        return view('film.index', compact('query'));
    }
}
