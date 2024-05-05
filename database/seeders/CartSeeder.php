<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cart')->insert([['quantity' => 2, 'user_id' => 3,'product_id' => 1,'cart_status' => 'save','created_at' => now(),'updated_at' => now()],
        ['quantity' => 1,'user_id' => 3,'product_id' => 2,'cart_status' => 'save','created_at' => now(),'updated_at' => now()],
        ['quantity' => 1,'user_id' => 3,'product_id' => 3,'cart_status' => 'save','created_at' => now(),'updated_at' => now()],
    ]);

    }
}
