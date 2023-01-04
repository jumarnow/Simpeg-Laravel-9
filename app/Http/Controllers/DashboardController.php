<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['user'] = User::count();
        $data['pgw_lk'] = Pegawai::whereJenisKelamin('Laki-laki')->count();
        $data['pgw_pr'] = Pegawai::whereJenisKelamin('Perempuan')->count();
        $status = Keluarga::all();
        $status_lbl = [];
        $status_val = [];
        foreach ($status as $key => $value) {
            array_push($status_lbl, $value->nmstatusk);
            array_push($status_val, Pegawai::whereSkeluargaId($value->kdstatusk)->count());
        }

        // dd($status_val);
        $data['status_lbl'] = $status_lbl;
        $data['status_val'] = $status_val;
        
        return view('dashboard', $data);
    }

    public function chart()
    {
        $data['pgw_lk'] = Pegawai::whereJenisKelamin('Laki-laki')->count();
        $data['pgw_pr'] = Pegawai::whereJenisKelamin('Perempuan')->count();
        $status = Keluarga::all();
        $status_lbl = [];
        $status_val = [];
        foreach ($status as $key => $value) {
            array_push($status_lbl, $value->nmstatusk);
            array_push($status_val, Pegawai::whereSkeluargaId($value->kdstatusk)->count());
        }
        
        // dd($data);
        $data['status_lbl'] = $status_lbl;
        $data['status_val'] = $status_val;
        
        return view('chart', $data);
    }
}
