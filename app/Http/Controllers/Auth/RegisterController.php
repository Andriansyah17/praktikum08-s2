<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //memanggil halaman register
    function index()
    {
        return view('pages.auth.register');
    }

    //memproses login
    function register(Request $request)
    {
        //memvalidasi inputan form
        $validateuse = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'contact' => 'required',
            'password' => 'required'
        ]);

        //menyimpan database
        $userData = new User;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->contact = $request->contact;
        $userData->password = $request->password;
        $userData->save();

        //redirect
        return redirect()->to('/login')->with('success', 'Berhasil register');
    }
}

