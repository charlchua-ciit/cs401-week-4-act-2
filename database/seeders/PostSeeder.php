<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        Post::factory (10)->create([
            'user_id' => function () use ($users) {
                return $users->random()->id;
            }
        ]);
        $categories = Category::all();
        $posts = Post::all();
        foreach ($posts as $post) {
            $randomCats = $categories->random(rand(1, 3));
            $post->categories()->attach($randomCats);
        }
    }
}
