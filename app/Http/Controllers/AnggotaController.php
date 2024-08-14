<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;
class AnggotaController extends Controller
{
    public function cekobject(){
        $anggota = new Anggota;
        dump($anggota);
    }
    public function insert(){
        $anggota = new Anggota;
        $anggota-> nip='1234231';
        $anggota-> nama='dika';
        $anggota-> tanggal_lahir='2001-12-31';
        $anggota-> nilai='3.2';
        $anggota-> save();

        echo "data berhasil disimpan";
    
    }

    public function update(){
        $anggota = Anggota::find(1);
        $anggota->nama ='dono';
        $anggota->nilai='3.0';
        $anggota->save();

        echo "data berhasil di uptade";
    }
    public function delete(){
        $anggota = Anggota::find(1);
        $anggota->delete();
        echo "data berhasil dihapus";
    }

    public function all(){
        $result = Anggota::all();
        return view('tampilan_anggota',['anggotas'=>$result]);
    }

    public function find(){
        $result=Anggota::find(1);
        return view('tampilan_anggota',['anggotas'=>[$result]]);
    }

    public function getWhere(){
        $result = Anggota::where('nilai','>','3.3')
        ->orderBy('nama','desc')
        ->get();
        return view('tampilan_anggota',['anggotas'=>$result]);
    }
}


