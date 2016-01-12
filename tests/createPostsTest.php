<?php

class createPostsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostCreation()
    {
        // not really a test
        $users = factory(App\User::class, 3)
            ->create()
            ->each(function ($u) {
                $u->posts()->save(factory(App\Post::class)->make());
            });
    }
}
