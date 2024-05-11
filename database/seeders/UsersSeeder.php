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
        DB::table('users')->insert([['full_name' => 'Nguyen Chi Loc','email' => 'loc09@mail.com','password' => '$2y$10$39Wc20u1B/N2NIC9K/7RIuMSO3j6uDgcPs9CGIckKCxNsvfgc23d2',
        'phone' => '0906327989','gender' => 'Nam','date' => '2002-10-28','address' => 'TPHCM', 'about' => '', 'level_id' => '1', 'status' => 'Active','created_at' => now(),'updated_at' => now()],
        ['full_name' => 'Ngạo Tình','email' => 'admin123@mail.com','password' => '$2y$10$39Wc20u1B/N2NIC9K/7RIuMSO3j6uDgcPs9CGIckKCxNsvfgc23d2',
        'phone' => '0984562155','gender' => 'Nu','date' => '1996-4-20','address' => 'TPHCM', 'about' => '', 'level_id' => '1', 'status' => 'Active','created_at' => now(),'updated_at' => now()],
        ['full_name' => 'Nguyen Chi Phuc','email@mail.com' => 'phuc12','password' => '$2y$10$39Wc20u1B/N2NIC9K/7RIuMSO3j6uDgcPs9CGIckKCxNsvfgc23d2',
        'phone' => '0919727907','gender' => 'Nam','date' => '1999-03-23','address' => 'TPHCM', 'about' => '', 'level_id' => '2', 'status' => 'Active','created_at' => now(),'updated_at' => now()],
        
    ]);
    }
}
