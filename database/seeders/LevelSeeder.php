<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['level_kode'=> 'ADM', 'level_nama'=>'Administrator'],
            ['level_kode'=> 'MMG', 'level_nama'=>'Manager'],
            ['level_kode'=> 'STF', 'level_nama'=>'Staff/Kasir']        
        ];

        DB::table('m_level')->insert($data);
    }
}
