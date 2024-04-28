<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('price')->insert([
            ['price_name' => 'Dưới 2 triệu','price_to' => '0','price_from' => '2000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['price_name' => 'Từ 2 đến 4 triệu','price_to' => '1000000','price_from' => '4000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['price_name' => 'Từ 4 đến 7 triệu','price_to' => '4000000','price_from' => '7000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['price_name' => 'Từ 7 đến 10 triệu','price_to' => '7000000','price_from' => '10000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['price_name' => 'Từ 10 đến 20 triệu','price_to' => '10000000','price_from' => '20000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['price_name' => 'Trên 20 triệu','price_to' => '20000000','price_from' => '1000000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['price_name' => 'Trên 20 triệu','price_to' => '20000000','price_from' => '1000000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
        ]);
    }
}
