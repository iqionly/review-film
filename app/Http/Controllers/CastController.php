<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function create() {
        return view('cast.create');
    }

    public function store(Request $req) {
        $req->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $query = DB::table('cast')->insert([
            "nama" => $req["nama"],
            "umur" => $req["umur"],
            "bio" => $req["bio"]
        ]);

        return redirect('/cast');
    }

    public function index()
    {
        $casts = DB::table('cast')->get();
        return view('cast.index', compact('casts'));
    }

    public function show($id)
    {
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('cast.show', compact('cast'));
    }
    
    public function edit($id)
    {
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('cast.edit', compact('cast'));
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $query = DB::table('cast')
            ->where('id', $id)
            ->update([
                'nama' => $req['nama'],
                'umur' => $req['umur'],
                'bio' => $req['bio'],
            ]);

        return redirect('/cast');
    }

    public function destroy($id)
    {
        $query = DB::table('cast')
            ->where('id', $id)
            ->delete();
        return redirect('/cast');
    }
}
