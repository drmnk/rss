<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostsController::class, 'index']);

Route::get('/posts/{category}', [PostsController::class, 'indexCategory'])
    ->name('posts.category');

Route::get('/posts/{category}/{id}-{slug}', [PostsController::class, 'show'])
    ->name('posts.category.post');
