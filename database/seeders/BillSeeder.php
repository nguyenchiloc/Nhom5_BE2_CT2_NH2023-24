<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bill')->insert([['user_id' => 1,'product_id' => 1,'total_qty' => 10 ,'total_amount' => 20000 ,
        'date_invoice' => '2024/03/18','created_at' => now(),'updated_at' => now()],
        ['user_id' => 2,'product_id' => 2,'total_qty' => 2 ,'total_amount' => 8000 ,
        'date_invoice' => '2024/03/21','created_at' => now(),'updated_at' => now()],
        ['user_id' => 3,'product_id' => 3,'total_qty' => 4 ,'total_amount' => 4000 ,
        'date_invoice' => '2024/03/21','created_at' => now(),'updated_at' => now()],
    ]);
    }
}
