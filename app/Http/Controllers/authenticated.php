<?php

namespace App\Http\Controllers;

use App\Http\Controllers\authenticated as ControllersAuthenticated;
use App\Models\Users;
use Hamcrest\Core\Set;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

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
        # $auth_req->requet_sessions($auth_req);
        $privileges = Users::select('username', 'password', 'privileges')->where('username', '=', $auth_req['username'])->where('password', $auth_req['password'])->get();
        if($privileges)
        {

            foreach(json_decode($privileges, true) as $iterate => $data)
            {
                $Elevated = strval($data['username']);
                $Hash = $data['password'];
                if($Elevated == $auth_req['username'] && $auth_req['password'] == $Hash)
                {
                    $pass_sessions = new ControllersAuthenticated;
                    $pass_sessions->prev_sessions($auth_req, $auth_req->session()->put($auth_req['password'], Hash::make($auth_req['password'])));
                    return redirect('/Dashboard');
                # Session will be applied
                }# Session will be applied
            }
       }
       
        Toast('Either Your password Incorrect or Username', 'error');
        return back();
    }

    function prev_sessions(Request $Reqs, $sessions)
    {
        if($Reqs->session()->has($sessions))
        {
            $Reqs['login'] = true;
            $Reqs->flash();
            return;
        }
        abort(401, "Woah, Try to be Sneaky heh");
    }

    function requet_sessions(Request $req)
    {
        # $this->saved_sessions = $req->session()-StartSession
    }
}
