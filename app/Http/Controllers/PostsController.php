<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Scopes\PostNoBodyScope;

class PostsController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::with('category')->get();

        return view('index', compact('categories', 'posts'));
    }

    public function indexCategory(string $categorySlug)
    {
        $categories = Category::all();
        $currentCategory = Category::where('slug', $categorySlug)->firstOrFail();
        $posts = $currentCategory->posts()->with('category')->get();

        return view('index', compact('categories', 'currentCategory', 'posts'));
    }

    public function show(string $categorySlug, int $id)
    {
        $categories = Category::all();
        $currentCategory = Category::where('slug', $categorySlug)->firstOrFail();
        $post = Post::withoutGlobalScope(PostNoBodyScope::class)->findOrFail($id);

        return view('post', compact('categories', 'currentCategory', 'post'));
    }
}
