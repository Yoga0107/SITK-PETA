<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\authenticated;
use App\Models\dokters;
use App\Models\obats;
use Illuminate\Support\Facades\DB;

class Routes extends Controller
{
    public function Login()
    {
        return view('auths.logins');
    }

    public function Logout(Request $req)
    {
        $req->session()->flush();
        return view('auths.logins');
    }

    public function dashboard(Request $req)
    {
        $new = new authenticated;
        $session_set = $req->session()->all();
        $data = $new->prev_sessions($session_set);
        if(isset($data))
        {
            return view('dashboard.index');
        }

        abort(401);
    }

    public function dokter(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            # $full_data = dokters::select()->get()->paginate(10);
            return view('dokter.index', ["Data"=> DB::table('dokters')->paginate(10)]);
        }

        abort(401);
    }

    public function add_dokter(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('dokter.views.create');
        }

        abort(401); 
    }

    public function edit_dokter(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('dashboard.index');
        }

        abort(401); 
    }

    # 2
    public function pasien(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('pasien.index', ["Data"=>DB::table('pasiens')->paginate(10)]);
        }

        abort(401);
    }

    public function add_pasien(Request $req)
    {
        $session_set = $req->session()->all();
        $session_set = $req->session()->flush();
        $session_set = $req->session()->regenerate();
        if($session_set)
        {
            return view('pasien.views.create');
        }

        abort(401); 
    }

    public function edit_pasien(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('dashboard.index');
        }

        abort(401); 
    }
    # 3
    public function ruang(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('rumah-sakit.index', ["Data" => DB::table('ruangans')->paginate(10)]);
        }

        abort(401);
    }

    public function add_ruang(Request $req)
    {
        $session_set = $req->session()->all();
        $session_set = $req->session()->flush();
        $session_set = $req->session()->regenerate();
        if($session_set)
        {
            return view('rumah-sakit.views.create');
        }

        abort(401); 
    }

    public function edit_ruang(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('dashboard.index');
        }

        abort(401); 
    }
    #4
    public function obat(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('obat.obat' , ["Data"=> DB::table('obats')->paginate(10)]);
        }

        abort(401);
    }

    public function add_obat(Request $req)
    {
        $session_set = $req->session()->all();
        $session_set = $req->session()->flush();
        $session_set = $req->session()->regenerate();
        if($session_set)
        {
            return view('obat.views.create');
        }

        abort(401); 
    }

    public function edit_obat(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('dashboard.index');
        }

        abort(401); 
    }

    #5
    public function rekam_medis(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('rekam-medis.index');
        }

        abort(401);
    }

    public function add_rekam_medis(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('dashboard.index');
        }

        abort(401); 
    }

    public function edit_rekam_medis(Request $req)
    {
        $session_set = $req->session()->all();
        if($session_set)
        {
            return view('dashboard.index');
        }

        abort(401); 
    }
}
