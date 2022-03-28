<?php

namespace App\Http\Controllers;

use App\Exports\FilmExport;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class FilmController extends Controller
{
    // Test connection
    public function index()
    {
        $query = Film::with('genre')->get();

        if(session('success'))
        {
            Alert::success(session('success'));
        }

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

    public function create()
    {
        return view('film.create', ['genre' => Genre::all()]);
    }

    public function store(Request $req)
    {
        $req->validate([
            'judul' => 'required',
            'ringkasan' => 'required|max:300',
            'tahun' => 'required',
            'genre' => 'required',
        ]);

        $req['poster'] = 'default';

        $store = Film::create([
            'judul' => $req['judul'],
            'ringkasan' => $req['ringkasan'],
            'tahun' => $req['tahun'],
            'poster' => $req['poster'],
            'genre_id' => $req['genre'],
        ]);

        return redirect('/film')->with('success', 'Berhasil tersimpan.');
    }

    public function getFilms(Request $request)
    {
        if ($request->ajax()) {
            $data = Film::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('genre', function ($row)
                {
                    $linkgenre = '<a href="/genre/' . $row->genre->id . '/edit">' . $row->genre->nama . '</a>';
                    return $linkgenre;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="/film/'.$row->id.'/edit" class="edit btn btn-success btn-sm">Edit</a> <a class="delete btn btn-danger btn-sm" onclick="showModal(\'/film/'.$row->id.'\')">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'genre'])
                ->make(true);
        }
    }

    public function destroy($id)
    {
        $des = Film::destroy($id);

        if(!$des) {
            return response('fail', 400);
        }
        return response('success', 200);
    }

    public function test(Request $req)
    {
        return view('film.test');
    }
}
