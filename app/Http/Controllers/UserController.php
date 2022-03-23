<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = Users::all();
        dd($user[0]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function newuser(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email:dns',
            'password' => 'required',
            'terms' => 'required',
        ]);

        $query = DB::table('users')->insert([
            "name" => $req["name"],
            "email" => $req["email"],
            "password" => Hash::make($req["password"]),
        ]);

        return redirect('/user/register');
    }

    public function loginPage()
    {
        return view('user.login');
    }

    public function signin(Request $req)
    {
        $credentials = $req->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:3',
        ]);

        if(Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return back()->withErrors(['status' => 'Login Gagal']);

        // $query = DB::table('users')->where([
        //     ['email', '=', $req['email']],
        //     ['password', '=', bcrypt($req['password'])],
        // ])->exists();
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/user/login');
    }

    public function test()
    {
        $test = Users::all();
        dd($test);
    }
}
