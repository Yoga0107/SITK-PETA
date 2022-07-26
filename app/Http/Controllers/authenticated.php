<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Log;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\JsonDecoder;

class authenticated extends Controller
{
    function check_users(Request $auth_req)
    {
        $auth_req->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);
        $privileges = DB::table('users')->select('username','password','privileges')->where('password', $auth_req['password'])->where('username', $auth_req['username'])->get();

        /* $Level_Condition = array(;
        /* $Level_Condition = array()
            0 => "False",
            1 => "True"
        ); */

        # Log::info('check query privileges working', $privileges.toSQL());
        // session_start(); 
        // Problem 1. Didn't Convert to String
        foreach($privileges as $data)
        {
            return back()->with('success', $data['privileges']);
            /*
            if ($data['privileges'] == 'Admin')
            {
                return json_decode($privileges);
            }
            else
            {
                return back()->with('failed', "A");
            }
            */
        }
    }
}
