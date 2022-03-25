<?php

namespace App\Http\Controllers;

use App\Exports\FilmExport;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;

class FilmController extends Controller
{
    // Test connection
    public function index()
    {
        $query = Film::with('genre')->get();

        return view('film.index', compact('query'));
    }

    public function export()
    {
        return Excel::download(new FilmExport, 'film.xlsx');
    }

    public function show($id)
    {
        $query = Film::find($id)->get();
        return response($query);
    }
}
