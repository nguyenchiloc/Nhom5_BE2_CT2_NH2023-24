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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call(ProductsSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(GroupProductSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(BillSeeder::class);
        $this->call(UsersSeeder::class);
        
    }
}
