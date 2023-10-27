<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'id' => 1,
            'name'=> 'Test Post',
            'description' => 'This is a test post.',
        ]);

        Post::create([
            'id' => 2,
            'name'=> 'Test Post 2',
            'description' => 'This is a test post 2.',
        ]);

        Post::create([
            'id' => 3,
            'name'=> 'Test Post 3',
            'description' => 'This is a test post 3.',
        ]);
        
    }
}
