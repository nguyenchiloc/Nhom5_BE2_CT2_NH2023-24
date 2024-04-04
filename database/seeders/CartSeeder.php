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
        DB::table('cart')->insert([['CartID' => '01','UserID' => '01','ProductID' => '01','created_at' => now(),'updated_at' => now()],
        ['CartID' => '02','UserID' => '02','ProductID' => '02','created_at' => now(),'updated_at' => now()],
        ['CartID' => '03','UserID' => '03','ProductID' => '03','created_at' => now(),'updated_at' => now()],
    ]);

    }
}
