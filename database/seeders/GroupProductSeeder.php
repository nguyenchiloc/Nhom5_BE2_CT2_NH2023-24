<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('_group_product')->insert([['GroupID' => '01','GroupName' => 'Iphone','GroupDescrip' => 'Day La Nhom San Pham Iphone','created_at' => now(),'updated_at' => now()],
        ['GroupID' => '02','GroupName' => 'Dong Ho','GroupDescrip' => 'Day La Nhom San Pham Dong Ho','created_at' => now(),'updated_at' => now()],
    ]);
    }
}
