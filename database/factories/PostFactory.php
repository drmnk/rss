<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

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
            'before_cut' => Str::substr($body, 0, 50),
            'body' => $body,
            'category_id' => $categories->random()->id
        ];
    }
}
