<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('level_user')->insert([['level_name' => 'Admin','created_at' => now(),'updated_at' => now()],
        ['level_name'=>'User','created_at' => now(),'updated_at' => now()],
    ]);
    }
}
