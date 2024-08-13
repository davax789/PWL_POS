<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function index(){
        // $data=[
        //     'level_kode'=>'SNK',
        //     'level_nama'=>'Snack/Makanan ringan',
        //     'created_at'=>now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // DB::table('m_kategori')->insert($data);
        // return 'data berhasil ditambah';

        // $row = DB::table('m_kategori')->where('level_kode','SNK')->update([ 'level_nama'=> 'Camilan']);
        // return 'update data berhasil, jumlah data yang terupdate'. $row.'baris';

        // $data = DB::table('m_kategori')->where('level_kode','SNK')->delete();
        // return 'delete data berhasil, jumlah data yang terhapus'. $data .'baris';

        $data = DB::table('m_kategori')->get();
        return view ('kategori',['data'=>$data]);
    }
}
