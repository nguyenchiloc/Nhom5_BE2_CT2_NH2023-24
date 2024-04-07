<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        ['product_name' => 'Iphone 15','product_price' => 30000000 ,'product_qty' => 7,
        'category_id' => 1,'brand_id' => 1,'product_images' => 'product_1.jpg','product_description' => 'Đây là một chiếc Iphone 15', 'created_at' => now(),'updated_at' => now()],
        ['product_name' => 'Samsung S20','product_price' => 12000000 ,'product_qty' => 10,
        'category_id' => 1,'brand_id' => 2,'product_images' => 'product_2.jpg','product_description' => 'Đây là một chiếc sam sung', 'created_at' => now(),'updated_at' => now()],
        ['product_name' => 'Iphone 12','product_price' => 15000000 ,'product_qty' => 2,
        'category_id' => 1,'brand_id' => 1,'product_images' => 'product_3.jpg','product_description' => 'Đây là một chiếc Iphone 15', 'created_at' => now(),'updated_at' => now()],
        ['product_name' => 'Samsung A18','product_price' => 12000000 ,'product_qty' => 10,
        'category_id' => 1,'brand_id' => 2,'product_images' => 'product_4.jpg','product_description' => 'Đây là một chiếc Samsung', 'created_at' => now(),'updated_at' => now()],
        ['product_name' => 'Apple Watch T6','product_price' => 8200000 ,'product_qty' => 10,
        'category_id' => 2,'brand_id' => 2,'product_images' => 'product_5.jpg','product_description' => 'Đây là một chiếc đồng hồ thông minh Apple', 'created_at' => now(),'updated_at' => now()],
        ['product_name' => 'Samsung Watch S1','product_price' => 4500000 ,'product_qty' => 23,
        'category_id' => 2,'brand_id' => 2,'product_images' => 'product_6.jpg','product_description' => 'Đây là một chiếc đồng hồ thông minh Samsung', 'created_at' => now(),'updated_at' => now()],
        ['product_name' => 'Samsung Watch A3','product_price' => 3000000 ,'product_qty' => 21,
        'category_id' => 2,'brand_id' => 2,'product_images' => 'product_7.jpg','product_description' => 'Đây là một chiếc đồng hồ thông minh Samsung', 'created_at' => now(),'updated_at' => now()],
        ['product_name' => 'Tai nghe Bluetooth True Wireless AVA+ FreeGo ','product_price' => 1000000 ,'product_qty' => 50,
        'category_id' => 3,'brand_id' => 2,'product_images' => 'product_10.jpg','product_description' => 'Đây là một chiếc tai nghe bluetooth Samsung', 'created_at' => now(),'updated_at' => now()],
        ['product_name' => 'Máy ảnh kỹ thuật số S10 ','product_price' => 14000000 ,'product_qty' => 50,
        'category_id' => 3,'brand_id' => 2,'product_images' => 'product_18.jpg','product_description' => 'Đây là một chiếc máy ảnh kỹ thuật số hiệu thuộc thương hiệu Samsung', 'created_at' => now(),'updated_at' => now()],
        ['product_name' => 'Iphone 12 Promax','product_price' => 1000000 ,'product_qty' => 50,
        'category_id' => 1,'brand_id' => 1,'product_images' => 'product_17.jpg','product_description' => 'Đây là một chiếc sam sung', 'created_at' => now(),'updated_at' => now()],
        
    ]);
    }
}
