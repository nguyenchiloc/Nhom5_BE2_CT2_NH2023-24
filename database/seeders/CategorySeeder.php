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
        //theo thứ tự nhe 1 Điện thoại, 2 Laptop, 3 Đồng hồ đeo tay, 4Phu kien khac
        DB::table('category')->insert([
            ['category_name' => 'Điện thoại','category_description' => 'Các sản phẩm điện thoại','category_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['category_name' => 'Laptop','category_description' => 'Các sản phẩm laptop','category_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['category_name' => 'Đồng hồ','category_description' => 'Các sản phẩm đồng hồ','category_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['category_name' => 'Phụ kiện khác','category_description' => 'Các sản phẩm khác','category_status' => 'Active','created_at' => now(),'updated_at' => now()],
        ]);
        //tạo lại dữ liệu theo thứ tự giúp chị
    }
}
