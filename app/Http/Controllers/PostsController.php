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

    public function indexCategory($categorySlug)
    {
        $categories = Category::all();
        $currentCategory = Category::where('slug', $categorySlug)->first();
        $posts = $currentCategory->posts()->with('category')->get();

        return view('index', compact('categories', 'currentCategory', 'posts'));
    }

    public function show($categorySlug, $id)
    {
        $categories = Category::all();
        $currentCategory = Category::where('slug', $categorySlug)->first();
        $post = Post::withoutGlobalScope(PostNoBodyScope::class)->find($id);

        return view('post', compact('categories', 'currentCategory', 'post'));
    }
}
