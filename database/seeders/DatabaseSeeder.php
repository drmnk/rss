<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'John Doe',
            'email' => 'manager@rss.com',
            'password' => Hash::make(env('MANAGER_PASSWORD')),
        ]);

        \App\Models\Category::factory(5)->create();
        \App\Models\Post::factory(100)->create();
    }
}
