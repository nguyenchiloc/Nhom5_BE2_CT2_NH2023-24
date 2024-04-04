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
        DB::table('users')->insert([['ID' => '01','Name' => 'Nguyen Chi Loc','Email' => 'loc09','Password' => '123',
        'Phone' => '0906327989','Gender' => 'Nam','Date' => '2002-10-28','Address' => 'TPHCM', 'Level' => 'User','created_at' => now(),'updated_at' => now()],
        ['ID' => '02','Name' => 'Do Thi Thao Uyen','Email' => 'uyen10','Password' => '456',
        'Phone' => '0984562155','Gender' => 'Nu','Date' => '1996-4-20','Address' => 'TPHCM', 'Level' => 'User','created_at' => now(),'updated_at' => now()],
        ['ID' => '03','Name' => 'Nguyen Chi Phuc','Email' => 'phuc12','Password' => '789',
        'Phone' => '0919727907','Gender' => 'Nam','Date' => '1999-03-23','Address' => 'TPHCM', 'Level' => 'Admin','created_at' => now(),'updated_at' => now()],
        
    ]);
    }
}
