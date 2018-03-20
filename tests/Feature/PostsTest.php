<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPostsPage()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    public function testPostShowPage()
    {
        $post = Post::first();
        $response = $this->get('/posts/'.$post->id);

        $response->assertStatus(200);
    }
}
