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
            ['price_name' => 'Dưới 10 triệu','price_to' => '0','price_from' => '10000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['price_name' => 'Từ 10 đến 20 triệu','price_to' => '10000000','price_from' => '20000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
            ['price_name' => 'Từ 20 đến 30 triệu','price_to' => '20000000','price_from' => '30000000','price_status' => 'Active','created_at' => now(),'updated_at' => now()],
        ]);
    }
}
