<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kategori_id' => 2,
                'level_kode' => 'ADM',
                'level_nama' => 'Administrator',

            ],
            [
                'kategori_id' => 3,
                'level_kode' => 'MMG',
                'level_nama' => 'Manager',

            ],
            [
                'kategori_id' => 4,
                'level_kode' => 'STF',
                'level_nama' => 'Staff/Kasir',

            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}