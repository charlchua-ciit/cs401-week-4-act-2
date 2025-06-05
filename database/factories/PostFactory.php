<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->title();
        $status = fake()->randomElement(['D','P','I']);
        return [
            //
            'title' => $title,
            'content' => fake()->paragraph(),
            'slug' => fake()->slug(),
            'status' => $status,
            'publication_date' => $status=='P' ? now() : null,
            'last_modified_date' => now()
        ];
    }
}
