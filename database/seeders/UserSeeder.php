<?php

namespace Database\Seeders;
use Illumilel\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
            [   'user_id' => 2,
                'level_id' => 2,
                'username' => 'admin',
                'nama' => 'Administrator',
                'password' => Hash::make('12345')
            ],
            [   'user_id' => 3,
                'level_id' => 3,
                'username' => 'manager',
                'nama' => 'Manager',
                'password' => Hash::make('1234')
            ],
            [   'user_id' => 4,
                'level_id' => 4,
                'username' => 'staff',
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('1234')
            ],
        ];

        DB::table('m_user')->insert($data);
    }
}
