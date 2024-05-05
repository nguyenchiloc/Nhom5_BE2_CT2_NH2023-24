<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     *chi check zalo di
     * @return void
     */
    public function run()
    {
        $this->call(ProductsSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CartSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(BillSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(BillDetailSeeder::class);
    }
}
