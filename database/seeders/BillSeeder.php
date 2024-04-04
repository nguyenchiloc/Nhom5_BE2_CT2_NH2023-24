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
        DB::table('bill')->insert([['BillID' => '01','UserID' => '01','ProductID' => '01','ProductNumber' => 10 ,'Totalmoney' => 20000 ,
        'DateInvoice' => '2024/03/18','created_at' => now(),'updated_at' => now()],
        ['BillID' => '02','UserID' => '02','ProductID' => '02','ProductNumber' => 2 ,'Totalmoney' => 8000 ,
        'DateInvoice' => '2024/03/21','created_at' => now(),'updated_at' => now()],
        ['BillID' => '03','UserID' => '03','ProductID' => '03','ProductNumber' => 4 ,'Totalmoney' => 4000 ,
        'DateInvoice' => '2024/03/21','created_at' => now(),'updated_at' => now()],
    ]);
    }
}
