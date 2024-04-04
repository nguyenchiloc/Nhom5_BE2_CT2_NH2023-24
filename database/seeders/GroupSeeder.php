<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('group')->insert([['GroupID' => '01','GroupName' => 'Iphone','created_at' => now(),'updated_at' => now()],
        ['GroupID' => '02','GroupName' => 'Apple Watch','created_at' => now(),'updated_at' => now()],
        ['GroupID' => '03','GroupName' => 'Dong Ho Deo Tay','created_at' => now(),'updated_at' => now()],
    ]);
    }
}
