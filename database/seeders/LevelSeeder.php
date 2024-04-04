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
        DB::table('_level')->insert([['ID' => '01' , 'Name' => 'Admin','created_at' => now(),'updated_at' => now()],
        ['ID' => '02' , 'Name'=>'User','created_at' => now(),'updated_at' => now()],
    ]);
    }
}
