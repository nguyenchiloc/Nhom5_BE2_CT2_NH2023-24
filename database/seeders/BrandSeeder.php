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
        DB::table('brand')->insert([[ 'brand_name' => 'Apple' ,'brand_status' => '1', 'created_at' => now() , 'updated_at' => now()],
        [ 'brand_name' => 'Samsung', 'brand_status' => '1','created_at' => now() , 'updated_at' => now()],
        [ 'brand_name' => 'Casio' , 'brand_status' => '1','created_at' => now() , 'updated_at' => now()],
    ]);
    }
}
