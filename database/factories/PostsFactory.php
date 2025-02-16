<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // image , title , content
            'image' => 'storage/images/cute.jpeg',
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),  // random paragraph
        ];
    }
}
