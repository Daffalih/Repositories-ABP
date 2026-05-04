<?php

namespace App\Http\Controllers;

class Lat1Controller extends Controller{
    public function index() {
        $data["nama"]="Daffa Falih Aqilah";
        $data["NIM"]="2311102137";
        $data["Kelas"]="PS1IF-11-REG04";
        $data["asal"]="Bekasi";
        return view('v_latihan1', $data);
    }

    public function method2(){
        $data['title'] = "Daftar Mahasiswa";
        $data['daf_mhs'] = array(
            array("nama" => "Daffa Falih Aqilah", "asal" => "Bekasi"),
            array("nama" => "Agus", "asal" => "Bandung"),
            array("nama" => "Budi", "asal" => "Jakarta"),
            array("nama" => "Roni", "asal" => "Surabaya")
        );
        return view('v_latihan2', $data);
    }
}