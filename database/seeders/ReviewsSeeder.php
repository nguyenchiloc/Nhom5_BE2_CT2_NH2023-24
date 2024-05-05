<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([[ 'user_id' => '3' ,'product_id' => '1' ,'comment' => 'Rất ok tốt','rating' => 4, 'created_at' => now() , 'updated_at' => now()],
            [ 'user_id' => '3' ,'product_id' => '2' , 'comment' => 'Tệ', 'rating' => 3,'created_at' => now() , 'updated_at' => now()],
            [ 'user_id' => '3' ,'product_id' => '3' , 'comment' => 'Bình thường', 'rating' => 1,'created_at' => now() , 'updated_at' => now()],
        ]);
    }
}
