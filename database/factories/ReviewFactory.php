<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $createdAt = Carbon::instance(fake()->dateTimeBetween('-2 years', 'now'));

        return [
            'book_id' => null, 
            'review' => fake()->paragraph(), 
            'rating' => fake()->numberBetween(1, 5),
            'created_at' => $createdAt,
            'updated_at' => fake()->dateTimeBetween($createdAt, 'now')
        ];
    }

    public function good()
    {
        return $this->state(fn (array $attributes) => [
            'rating' => fake()->numberBetween(4, 5),
        ]);
    }

    public function average()
    {
        return $this->state(fn (array $attributes) => [
            'rating' => fake()->numberBetween(2, 5),
        ]);
    }

    public function bad()
    {
        return $this->state(fn (array $attributes) => [
            'rating' => fake()->numberBetween(1, 3),
        ]);
    }
}
