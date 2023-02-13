<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::with('category')->get();

        return view('index', compact('categories', 'posts'));
    }

    public function indexCategory($categorySlug)
    {
        $categories = Category::all();
        $currentCategory = Category::where('slug', $categorySlug)->with('posts')->first();
        $posts = $currentCategory->posts()->get()->map(function ($post) use ($currentCategory) {
            $post->category = $currentCategory;

            return $post;
        });

        return view('index', compact('categories', 'currentCategory', 'posts'));
    }
}
