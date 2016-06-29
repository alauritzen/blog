@extends('layouts.master')

@section('content')
    <div class='post-index'>
        @foreach($posts as $post)
            <a href={{ action('PostsController@show', $post->id) }}><h2> {{{ $post->title }}}</h2> </a>
            <p> {{{ str_limit($post->description, $limit=140, $end="...") }}} </p>
        @endforeach

        {{ $posts->links() }}
    </div>

@stop