<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brand')->insert([['BrandID' => '01', 'BrandName' => 'Apple' , 'ProductID' =>'01' , 'created_at' => now() , 'updated_at' => now()],
        ['BrandID' => '02', 'BrandName' => 'Samsung' , 'ProductID' =>'03' , 'created_at' => now() , 'updated_at' => now()],
        ['BrandID' => '03', 'BrandName' => 'Sony' , 'ProductID' =>'04' , 'created_at' => now() , 'updated_at' => now()],
    ]);
    }
}
