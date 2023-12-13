<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'type' => fake()->randomElement(config('default_images')),
            // 'base_amount',
            // 'has_extra_time',
            // 'extra_hours',
            // 'total_amount',
        ];
    }
}