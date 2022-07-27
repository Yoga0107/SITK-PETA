<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\dokters;
use App\Models\obats;
use App\Models\pasiens;
use App\Models\report_medicals;
use App\Models\ruangans;
use Barryvdh\Debugbar\Facades\Debugbar as FacadesDebugbar;
use DebugBar\DebugBar;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    # Pre-Req : This is Only Function Add
    # This is Create Data Obat
    # Need Some Request
    public function AddObat(Request $add)
    {
        $add->validate([
            'nama_obat' => 'required',
            'keterangan' => 'required',
            'tanggal_buat' => 'required',
            'expired' => 'required'
        ]);
        $data = new obats;
        $data->nama_obat = $add ->nama_obat;
        $data->keterangan = $add ->keterangan;
        $data->tanggal_buat = $add ->tanggal_buat;
        $data->expired = $add->expired;
        $check = $data->save();
        
        if($check)
        {
            return redirect('/Obat')->with('success', 'Data Successful Input');
        }

    }

    # This is Create AddPasien 
    # Need some Request
    public function AddPasien(Request $add)
    {
        $add -> validate([
            'Nomor_Identitas' => 'required', #Reference to HTML
            'Nama_Pasien' => 'required',
            'Jenis_Kelamin' => 'required',
            'Alamat' => 'required',
            'Telephone' => 'required',
        ]);
        $data = new pasiens;
        $data->Nomor_Identitas = $add -> Nomor_Identitas;
        $data->Nama_Pasien = $add ->Nama_Pasien;
        $data->Jenis_Kelamin = $add ->Jenis_Kelamin;
        $data->Alamat = $add->Alamat;
        $data->Telephone = $add->Telephone;
        $check = $data->save();
        
        if($check)
        {
            return redirect('/Pasien')->with('success', 'Data Successful Input');
        }

    }
    
    public function Add_MedicalHistory(Request $add)
    {
        $add -> validate([
            'Nomor_Pasien' => 'required',
            'keterangan' => 'required',
            'tanggal_buat' => 'required',
            'expired' => 'required'
        ]);
        $data = new report_medicals;
        $data->nama_obat = $add ->nama_obat;
        $data->keterangan = $add ->keterangan;
        $data->tanggal_buat = $add ->tanggal_buat;
        $data->expired = $add->expired;
        
        if($data->save())
        {
            back()->with('success', 'Data Successful Input');
            return view();
        }

    }


    public function AddRuangan(Request $add)
    {
        $add -> validate([
            'Nama_Ruangan' => 'required',
            'Lantai' => 'required',
            'Kode_Ruangan' => 'required',
        ]);
        $data = new ruangans;
        $data->Nama_Ruangan = $add ->Nama_Ruangan;
        $data->Lantai = $add ->Lantai;
        $data->Kode_Ruangan = $add ->Kode_Ruangan;
        $Check = $data->save();
        if($Check)
        {
            return redirect('/Ruangan')->with('success', 'Data Successful Input');
        }

    }
    #It will Wrong Somehow
    public function AddDokter(Request $add)
    {
        
        $add -> validate([
            'nama' => 'required',
            'Alamat' => 'required',
            'Telephone' => 'required',
            'Spesialis' => 'required'
        ]);
        $data = new dokters;
        $data->nama = $add->nama;
        $data->Alamat = $add->Alamat;
        $data->Telephone = $add->Telephone;
        $data->Spesialis= $add->Spesialis;
        $Chcek = $data->save();
        if($Chcek)
        {
            FacadesDebugbar::info("AAAA");
            return redirect('/Dokter')->with('success', 'Data Successful Input');
        }
        FacadesDebugbar::info("Failed");

    }
}
