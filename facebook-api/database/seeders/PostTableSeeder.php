<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            ['title' => 'Hello World', 'description' => 'Nham bay nv?'],
            ['title' => 'Hello guys!', 'description' => 'How are you doing?'],
            ['title' => 'Hello friends', 'description' => 'How are you getting on?'],
            ['title' => 'Hello World', 'description' => 'Nham bay nv?'],
            ['title' => 'Hello World', 'description' => 'Nham bay nv?'],
            ['title' => 'Hello World', 'description' => 'Nham bay nv?'],
        ];
        foreach($posts as $post) {
            Post::create($post);
        }
    }
}
