<?php

namespace App\Http\Controllers;

use App\Http\Controllers\authenticated as ControllersAuthenticated;
use App\Models\Users;
use Illuminate\Http\Request;

class authenticated extends Controller
{
    function check_users(Request $auth_req)
    {
        $auth_req->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);
        # Hash
        # Model Are Table
       $privileges = Users::select('username', 'password', 'privileges')->where('username', '=', $auth_req['username'])->where('password', $auth_req['password'])->get();
       foreach(json_decode($privileges, true) as $iterate => $data)
       {
            $Elevated = strval($data['username']);
            $Hash = $data['password'];
            $first = $auth_req->session()->put($auth_req['username'], @csrf_token());
            if($Elevated == $auth_req['username'] && $auth_req['password'] == $Hash)
            {
                $pass_sessions = new ControllersAuthenticated;
                $pass_sessions->prev_sessions($first);
                return redirect('/Dashboard');
                # Session will be applied
            }
            else
            {
                return back()->with('failed', 'Either Your password incorrect or Username');       
            }
        }
    }

    function sessions($sessions)
    {
        $call_sessions = new ControllersAuthenticated;
        dd($call_sessions->prev_sessions($sessions));
    }

    function prev_sessions($sessions)
    {
        $data = array();
        if($data == null)
        {
            $data = array($sessions);
            return $data;
        }
    }
}
