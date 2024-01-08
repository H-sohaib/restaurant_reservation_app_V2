<?php

namespace Database\Seeders;

use App\Models\Menu;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Generator::class);

        $menus = [
            // h category
            [
                'category_id' => 1,
                'name' => 'menu 1',
                'description' => $faker->realText(100),
                'image_path' => "uploads/menus_imgs/h1.jpg",
                'price' => $faker->numberBetween(1, 9999),
                'special' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'menu 2',
                'description' => $faker->realText(100),
                'image_path' => "uploads/menus_imgs/h2.jpg",
                'price' => $faker->numberBetween(1, 9999),
                'special' => false,
            ],
            // o catgeory
            [
                'category_id' => 2,
                'name' => 'menu 3',
                'description' => $faker->realText(100),
                'image_path' => "uploads/menus_imgs/o1.jpg",
                'price' => $faker->numberBetween(1, 9999),
                'special' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'menu 4',
                'description' => $faker->realText(100),
                'image_path' => "uploads/menus_imgs/o2.jpg",
                'price' => $faker->numberBetween(1, 9999),
                'special' => false,
            ],
            [
                'category_id' => 2,
                'name' => 'menu 5',
                'description' => $faker->realText(100),
                'image_path' => "uploads/menus_imgs/o3.jpg",
                'price' => $faker->numberBetween(1, 9999),
                'special' => false,
            ],
            // i categrory
            [
                'category_id' => 3,
                'name' => 'menu 6',
                'description' => $faker->realText(100),
                'image_path' => "uploads/menus_imgs/i1.jpg",
                'price' => $faker->numberBetween(1, 9999),
                'special' => true,
            ],
            [
                'category_id' => 3,
                'name' => 'menu 7',
                'description' => $faker->realText(100),
                'image_path' => "uploads/menus_imgs/i2.jpg",
                'price' => $faker->numberBetween(1, 9999),
                'special' => false,
            ],
            [
                'category_id' => 3,
                'name' => 'menu 8',
                'description' => $faker->realText(100),
                'image_path' => "uploads/menus_imgs/i3.jpg",
                'price' => $faker->numberBetween(1, 9999),
                'special' => false,
            ],


        ];
        foreach ($menus as $value) {
            Menu::create($value);
        };
    }
}