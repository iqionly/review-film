<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    //
    public function show()
    {
        $genres = DB::table('genre')->get();
        return view('genre.index', compact('genres'));
    }

    public function edit($id)
    {
        $genre = DB::table('genre')->where('id', $id)->first();
        return view('genre.edit', compact('genre'));
    }

    public function update($id, Request $req)
    {
        $validation = $req->validate([
            'nama' => 'required|min:3',
        ]);

        $query = DB::table('genre')->where('id', $id)->update([
            'nama' => $req['nama'],
        ]);

        if($query)
        {
            return redirect('/genre');
        } else {
            return back()->withErrors(['status' => 'Menyimpan Data Gagal..']);
        }
    }

    public function create(Request $req)
    {
        $validation = $req->validate([
            'nama' => 'required|min:3',
        ]);

        $query = DB::table('genre')->insert([
            'nama' => $req['nama'],
        ]);

        if($query) {
            return redirect('/genre')->with('status', 'Berhasil Tersimpan');;
        } else {
            return back()->withErrors(['status' => 'Gagal Menyimpan...']);
        }
    }

    public function createPage()
    {
        return view('genre.create');
    }

    public function destroy($id)
    {
        $query = DB::table('genre')->where('id', $id)->delete();

        return back()->with('fail', 'Berhasil Terhapus...');
    }

    public function test()
    {
        $query = Genre::where('id', 2)->get();
        
        dd($query);
    }
}
