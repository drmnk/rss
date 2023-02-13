<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $categories = Category::all();
        $title = fake()->sentence();
        $body = fake()->text(1000);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'before_cut' => Str::substr($body, 0, 100),
            'body' => $body,
            'category_id' => $categories->random()->id,
        ];
    }
}
