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
        DB::table('products')->insert([['ProductID' => '01','ProductName' => 'Iphone 15','Price' => 2000 ,'Inventorynumber' => 7,
        'GroupName' => 'Dien Thoai','Brand' => 'Apple','Images' => 'product-item1.jpg','Description' => 'Day La 1 Chiec Iphone', 'created_at' => now(),'updated_at' => now()],
        ['ProductID' => '02','ProductName' => 'Apple Watch Series 9','Price' => 4000 ,'Inventorynumber' => 12,'GroupName' => 'Dong Ho',
        'Brand' => 'Apple','Images' => 'product-item6.jpg','Description' => 'Day La 1 Chiec Apple Watch', 'created_at' => now(),'updated_at' => now()],
        ['ProductID' => '03','ProductName' => 'Dong Ho Deo Tay','Price' => 1000 ,'Inventorynumber' => 17,'GroupName' => 'Dong ho',
        'Brand' => 'Samsung','Images' => 'product-15.jpg','Description' => 'Day La 1 Chiec Dong Ho Deo tay', 'created_at' => now(),'updated_at' => now()],
        ['ProductID' => '04','ProductName' => 'May Choi Game Cam Tay Sony','Price' => 4000 ,'Inventorynumber' => 7,
        'GroupName' => 'May Choi Game','Brand' => 'Sony','Images' => 'post-item1.jpg','Description' => 'Day La 1 Chiec May Choi Game', 'created_at' => now(),'updated_at' => now()],
        ['ProductID' => '05','ProductName' => 'Iphone 12','Price' => 2500 ,'Inventorynumber' => 12,'GroupName' => 'Dien Thoai',
        'Brand' => 'Apple','Images' => 'product-item2.jpg','Description' => 'Day La 1 Chiec Iphone 12', 'created_at' => now(),'updated_at' => now()],
        ['ProductID' => '06','ProductName' => 'Iphone 11','Price' => 2000 ,'Inventorynumber' => 17,'GroupName' => 'Dien Thoai',
        'Brand' => 'Apple','Images' => 'product-item3.jpg','Description' => 'Day La 1 Chiec Iphone 11', 'created_at' => now(),'updated_at' => now()],
        ['ProductID' => '07','ProductName' => 'Iphone 14','Price' => 2000 ,'Inventorynumber' => 7,
        'GroupName' => 'Dien Thoai','Brand' => 'Iphone X','Images' => 'product-item4.jpg','Description' => 'Day La 1 Chiec Iphone X', 'created_at' => now(),'updated_at' => now()],
        ['ProductID' => '08','ProductName' => 'Apple Watch Series 4','Price' => 3000 ,'Inventorynumber' => 12,'GroupName' => 'Dong Ho',
        'Brand' => 'Apple','Images' => 'product-item7.jpg','Description' => 'Day La 1 Chiec Apple Watch', 'created_at' => now(),'updated_at' => now()],
        ['ProductID' => '09','ProductName' => 'Dong Ho Casio','Price' => 1000 ,'Inventorynumber' => 17,'GroupName' => 'Dong ho',
        'Brand' => 'Casio','Images' => 'product-item-8.jpg','Description' => 'Day La 1 Chiec Dong Ho Casio', 'created_at' => now(),'updated_at' => now()],
        ['ProductID' => '10','ProductName' => 'Tai Nghe Bluetooth Xiaomi','Price' => 2000 ,'Inventorynumber' => 47,'GroupName' => 'Tai Nghe',
        'Brand' => 'Xiaomi','Images' => 'post-item11.jpg','Description' => 'Day La 1 Chiec Tai Nghe Xiaomi
        ', 'created_at' => now(),'updated_at' => now()],
    ]);
    }
}
