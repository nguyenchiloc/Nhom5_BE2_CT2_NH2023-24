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
        //như bên kia 1.Apple 2.Samsung 3.Xiaomi 4.Asus 5.HP -->tạo dữ liệu giúp chị .OK
        DB::table('brand')->insert([
            [ 'brand_name' => 'Apple' ,'brand_description' => 'Thương hiệu Apple','brand_status' => 'Active', 'created_at' => now() , 'updated_at' => now()],
            [ 'brand_name' => 'Samsung', 'brand_description' => 'Thương hiệu Samsung', 'brand_status' => 'Active','created_at' => now() , 'updated_at' => now()],
            [ 'brand_name' => 'Xiaomi' , 'brand_description' => 'Thương hiệu Xiaomi', 'brand_status' => 'Active','created_at' => now() , 'updated_at' => now()],
            [ 'brand_name' => 'Asus', 'brand_description' => 'Thương hiệu Asus', 'brand_status' => 'Active','created_at' => now() , 'updated_at' => now()],
            [ 'brand_name' => 'HP' , 'brand_description' => 'Thương hiệu HP', 'brand_status' => 'Active','created_at' => now() , 'updated_at' => now()],
        ]);
    }
}
