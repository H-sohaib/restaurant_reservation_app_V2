<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Generator;
class CategorySeeder extends Seeder
{
    private $n = 0;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Generator::class);

        $categories = [
            [
                'name' => "Category 1",
                'image_path' => "uploads/categories_imgs/ch.jpg",
                'description' => $faker->realText(150),
            ],
            [
                'name' => "Category 2",
                'image_path' => "uploads/categories_imgs/co.jpg",
                'description' => $faker->realText(150),
            ],
            [
                'name' => 'Category 3',
                'image_path' => "uploads/categories_imgs/ci.jpg",
                'description' => $faker->realText(150),
            ]

        ];
        foreach ($categories as $key => $value) {
            Category::create($value);
        };
    }
}