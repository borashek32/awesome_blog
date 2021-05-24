<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory(5)->create();
        \App\Models\Post::factory(100)->create();
        \App\Models\Tag::factory(20)->create();
        \App\Models\Comment::factory(200)->create();
        \App\Models\User::factory(20)->create();
        \App\Models\PostTag::factory(100)->create();
        \App\Models\CategoryPost::factory(20)->create();
    }
}
