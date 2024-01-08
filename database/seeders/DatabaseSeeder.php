<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(adminSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(TableSeeder::class);

        // Category::factory(5)->create();
        // Menu::factory(10)->create();
        Reservation::factory(2)->create();
    }
}
