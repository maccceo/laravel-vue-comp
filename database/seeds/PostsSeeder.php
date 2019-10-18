<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    public function run()
    {
        factory(Post::class, 30) -> create();
    }
}
