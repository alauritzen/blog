<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $post = new Post();
        $post->title = "First post";
        $post->description = "I made a post in Laravel";
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = "Second post";
        $post->description = "I made another post in Laravel";
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = "Third post";
        $post->description = "I made yet another post in Laravel";
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = "Fourth post";
        $post->description = "I made a last post in Laravel";
        $post->user_id = User::first()->id;
        $post->save();

    }
}