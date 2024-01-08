<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Generator::class);
        // ['Pending', 'Available' , 'Unavailable']

        $menus = [
            [
                'name' => 'Table 1',
                'guest' => $faker->numberBetween(1, 5),
                'status' => $faker->randomElement(['Available', 'Unavailable']),
                'location' => $faker->randomElement(['Front', 'Inside', 'Outside']),
            ],
            [
                'name' => 'Table 2',
                'guest' => $faker->numberBetween(1, 5),
                'status' => $faker->randomElement(['Available', 'Unavailable']),
                'location' => $faker->randomElement(['Front', 'Inside', 'Outside']),
            ],
            [
                'name' => 'Table 3',
                'guest' => $faker->numberBetween(1, 5),
                'status' => $faker->randomElement(['Available', 'Unavailable']),
                'location' => $faker->randomElement(['Front', 'Inside', 'Outside']),
            ],
            [
                'name' => 'Table 4',
                'guest' => $faker->numberBetween(1, 5),
                'status' => $faker->randomElement(['Available', 'Unavailable']),
                'location' => $faker->randomElement(['Front', 'Inside', 'Outside']),
            ],
            [
                'name' => 'Table 5',
                'guest' => $faker->numberBetween(1, 5),
                'status' => $faker->randomElement(['Available', 'Unavailable']),
                'location' => $faker->randomElement(['Front', 'Inside', 'Outside']),
            ],
            [
                'name' => 'Table 6',
                'guest' => $faker->numberBetween(1, 5),
                'status' => $faker->randomElement(['Available', 'Unavailable']),
                'location' => $faker->randomElement(['Front', 'Inside', 'Outside']),
            ],

        ];
        foreach ($menus as $key => $value) {
            Table::create($value);
        };
    }
}

/* 
* Pending
* Available
* Unavailable
-- location :
* Front
* Inside
* Outside
*/