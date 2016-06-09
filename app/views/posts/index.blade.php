@extends('layouts.master')

@section('content')
    <div class='post-index'>
        @foreach($posts as $post)
            <a href={{ action('PostsController@show', $post->id) }}><h2> {{{ $post->title }}}</h2> </a>
            <p> {{{ $post->description }}} </p>
        @endforeach

        {{ $posts->links() }}
    </div>

@stop