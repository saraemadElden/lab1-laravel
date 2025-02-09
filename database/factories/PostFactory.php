<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $imagePath = 'images/' . Str::random(10) . '.jpg';
        Storage::disk('public')->put($imagePath, UploadedFile::fake()->image($imagePath));

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $imagePath, 
        ];
    }
}
