<?php

class Post extends BaseModel {
    
    protected $table="posts";

    public static $rules = array (
        'title' => 'required|max:150',
        'description' => 'required|max:15000'
    );

    public function user()
    {
        return $this->belongsTo('User');
    }




}


?>