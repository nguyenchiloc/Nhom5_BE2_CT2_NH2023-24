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
        DB::table('brand')->insert([[ 'brand_name' => 'Apple' ,'brand_description' => 'Thương hiệu Apple','brand_status' => 'Active', 'created_at' => now() , 'updated_at' => now()],
            [ 'brand_name' => 'Samsung', 'brand_description' => 'Thương hiệu Samsung', 'brand_status' => 'Active','created_at' => now() , 'updated_at' => now()],
            [ 'brand_name' => 'Casio' , 'brand_description' => 'Thương hiệu Casio', 'brand_status' => 'Active','created_at' => now() , 'updated_at' => now()],
        ]);
    }
}
