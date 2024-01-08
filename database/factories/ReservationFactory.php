<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'table_id' => $this->faker->numberBetween(1, 6),
            'reserver_name' => $this->faker->name(),
            'reserver_email' => $this->faker->email(),
            'reserver_phone' => $this->faker->phoneNumber(),
            'reservation_date' => $this->faker->dateTimeBetween('+0 days', '+2 years'),
            'guest' => $this->faker->numberBetween(1, 6),   
        ];
    }
}