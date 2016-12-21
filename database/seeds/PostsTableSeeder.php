<?php

use Illuminate\Database\Seeder;

use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = Post::create([
        	"title" => "Demo Post",
        	"body" => "Content of the Post"
        ]);

        $post = Post::create([
        	"title" => "Another Post",
        	"body" => "Body of the Post"
        ]);

        $post = Post::create([
        	"title" => "Some Title",
        	"body" => '<h2 class="text-success">Content of the Post</h2>'
        ]);
    }
}
