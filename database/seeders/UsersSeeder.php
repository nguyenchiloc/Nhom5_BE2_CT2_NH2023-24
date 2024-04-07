<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([['full_name' => 'Nguyen Chi Loc','email' => 'loc09','password' => '123',
        'phone' => '0906327989','gender' => 'Nam','date' => '2002-10-28','address' => 'TPHCM', 'level_id' => '2','created_at' => now(),'updated_at' => now()],
        ['full_name' => 'Do Thi Thao Uyen','email' => 'uyen10','password' => '456',
        'phone' => '0984562155','gender' => 'Nu','date' => '1996-4-20','address' => 'TPHCM', 'level_id' => '2','created_at' => now(),'updated_at' => now()],
        ['full_name' => 'Nguyen Chi Phuc','email' => 'phuc12','password' => '789',
        'phone' => '0919727907','gender' => 'Nam','date' => '1999-03-23','address' => 'TPHCM', 'level_id' => '1','created_at' => now(),'updated_at' => now()],
        
    ]);
    }
}
