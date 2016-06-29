<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $post = new Post();
        $post->title = "Why I chose Codeup";
        $post->description = 
            "I chose Codeup because I happen to be in San Antonio, and I like the community and resources that are available through a physical school, compared to an online course. Among the resources, I include the Geekdom shared workspace nearby that hosts so many programming Meetup groups.";
        $post->user_id = User::first()->id;
        $post->save();

    }
}