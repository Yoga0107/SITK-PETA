<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routes extends Controller
{
    public function Login()
    {
        return view('auths.logins');
    }

    public function Logout()
    {
        session_destroy();
        session_unset();
        return view('auths.logins');
    }
}
