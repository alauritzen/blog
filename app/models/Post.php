<?php

class Post extends Eloquent {
    
    protected $table="posts";

    public static $rules = array (
        'title' => 'required|max:150',
        'description' => 'required|max:15000'
    );





}


?>