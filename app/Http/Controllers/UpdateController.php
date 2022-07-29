<?php

namespace App\Http\Controllers;

use App\Models\dokters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function editDokter(Request $req, $params)
    {
        $temp = $params;
        $update = dokters::select();
    }
}
