<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text('13'),
            'description' => $this->faker->realText(100),
            'image_path' => 'public/uploads/menus_imgs/default.png',
            'price' => $this->faker->numberBetween(1, 9999),
            'category_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}