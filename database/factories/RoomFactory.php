<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'roomDescription'=>fake()->text($maxNbChars = 100),
            'roomCapacity'=>fake()->randomDigitNot(10),
            'dateFrom'=>fake()->dateTime($max = 'now', $timezone = null),
            'dateTo'=>fake()->dateTime($max = 'now', $timezone = null),
        ];
    }
}
