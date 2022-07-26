<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\ruangan;
use Egulias\EmailValidator\Result\ValidEmail;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    # Pre-Req : This is Only Function Add
    # This is Create Data Obat
    # Need Some Request
    public function Add_Obat(Request $add)
    {
        $add -> validate([
            'nama_obat' => 'required',
            'keterangan' => 'required',
            'tanggal_buat' => 'required',
            'expired' => 'required'
        ]);
        $data = new Obat;
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

    # This is Create AddPasien 
    # Need some Request
    public function Add_Pasien(Request $add)
    {
        $add -> validate([
            'Nomor_Identitas' => 'required', #Reference to HTML
            'Nama_Pasien' => 'required',
            'Jenis_Kelamin' => 'required',
            'Alamat' => 'required',
            'Telephohe' => 'required',
        ]);
        $data = new Pasien;
        $data->Nomor_Identitas = $add -> Nomor_Identitas;
        $data->Nama_Pasien = $add ->Nama_Pasien;
        $data->Jenis_Kelamin = $add ->Jenis_Kelamin;
        $data->Alamat = $add->Alamat;
        $data->Telephohe = $add->Telephohe;
        
        if($data->save())
        {
            back()->with('success', 'Data Successful Input');
            return view();
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
        $data = new Obat;
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


    public function Add_Ruangan(Request $add)
    {
        $add -> validate([
            'Nama_Ruangan' => 'required',
            'Lantai' => 'required',
            'Kode_Ruangan' => 'required',
        ]);
        $data = new ruangan;
        $data->Nama_Ruangan = $add ->Nama_Ruangan;
        $data->Lantai = $add ->Lantai;
        $data->Kode_Ruangan = $add ->Kode_Ruangan;
        
        if($data->save())
        {
            back()->with('success', 'Data Successful Input');
            return view();
        }

    }
    #It will Wrong Somehow
    public function Add_Dokter(Request $add)
    {
        $add -> validate([
            'nama' => 'required',
            'Alamat' => 'required',
            'Telephone' => 'required',
            'Spesialis' => 'required'
        ]);
        $data = new dokter;
        $data->nama = $add ->nama;
        $data->Alamat = $add ->Alamat;
        $data->Telephone = $add ->Telephone;
        $data->Spesialis= $add->Spesialis;
        
        if($data->save())
        {
            back()->with('success', 'Data Successful Input');
            return view();
        }

    }
}
