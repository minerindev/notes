<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        echo "loginSubmit Page";
    }

    public function logout()
    {
        echo "logout Page";
    }
}
