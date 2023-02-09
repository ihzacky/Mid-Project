<?php

namespace App\Http\Controllers;

use App\Models\Karyawan_model;
use Illuminate\Http\Request;

class Karyawan_controller extends Controller
{
    function tambahKaryawan(Request $req){
        
        $datatosend = [
            "nama_karyawan"=>$req->nama_karyawan,
            "umur_karyawan"=>$req->umur_karyawan,
            "alamat_karyawan"=>$req->alamat_karyawan,
            "telepon_karyawan"=>$req->telepon_karyawan
        ];
        Karyawan_model::create($datatosend);
        return redirect()->route("listkaryawan");
    }

    function deleteKaryawan($id){
        Karyawan_model::find($id)->delete();
        return redirect()->back();
    }

    function geteditKaryawan($id){
        $data = Karyawan_model::find($id);
        return view("edit-karyawan", ["idKaryawan" => $id, "dataKaryawan" => $data]);
    }    

    function editKaryawan(Request $req, $id){
        $data = Karyawan_model::find($id);
        $data->update([
            "nama_karyawan" => $req->nama_karyawan,
            "umur_karyawan" => $req->umur_karyawan,
            "alamat_karyawan" => $req->alamat_karyawan,
            "telepon_karyawan" => $req->telepon_karyawan

        ]);
        return redirect()->route('listkaryawan');
    }
}


