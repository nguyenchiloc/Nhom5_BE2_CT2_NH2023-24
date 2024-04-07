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
        DB::table('cart')->insert([['user_id' => 1,'product_id' => 1,'created_at' => now(),'updated_at' => now()],
        ['user_id' => 2,'product_id' => 2,'created_at' => now(),'updated_at' => now()],
        ['user_id' => 3,'product_id' => 3,'created_at' => now(),'updated_at' => now()],
    ]);

    }
}
