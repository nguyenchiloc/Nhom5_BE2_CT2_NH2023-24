<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
            ['category_name' => 'Điện thoại','category_description' => 'Các sản phẩm điện thoại','created_at' => now(),'updated_at' => now()],
            ['category_name' => 'Đồng hồ','category_description' => 'Các sản phẩm đồng hồ','created_at' => now(),'updated_at' => now()],
            ['category_name' => 'Phụ kiện khác','category_description' => 'Các sản phẩm khác','created_at' => now(),'updated_at' => now()],
        ]);
    }
}
