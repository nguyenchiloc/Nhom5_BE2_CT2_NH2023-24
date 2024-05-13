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
        DB::table('users')->insert([
            ['full_name' => 'admin','email' => 'admin@mail.com','password' => '$2y$10$39Wc20u1B/N2NIC9K/7RIuMSO3j6uDgcPs9CGIckKCxNsvfgc23d2',
            'phone' => '0984562155','gender' => 'Nu','date' => '2024-4-20','address' => 'TPHCM', 'about' => '','avatar' => '1.jpg', 'level_id' => '1', 'status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['full_name' => 'abc','email' => 'abc@mail.com','password' => '$2y$10$39Wc20u1B/N2NIC9K/7RIuMSO3j6uDgcPs9CGIckKCxNsvfgc23d2',
            'phone' => '0984562155','gender' => 'Nu','date' => '2004-4-20','address' => 'TPHCM', 'about' => '','avatar' => '2.jpg', 'level_id' => '2', 'status' => 'Active','created_at' => now(),'updated_at' => now()],
    ]);
    }
}
