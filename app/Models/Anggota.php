<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    public function insert(){
        $anggota = new Anggota;
        $anggota-> nip='1234231';
        $anggota-> nama='dika';
        $anggota-> tanggal_lahir='2001-12-31';
        $anggota-> nilai='3.2';
        $anggota-> save();

        echo "data berhasil disimpan";
    
    }
}
