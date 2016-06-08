@extends('layouts.master')

@section('content')

    @foreach($posts as $post)
        <a href={{ action('PostsController@show', $post->id) }}><h2> {{{ $post->title }}}</h2> </a>
        <p> {{{ $post->description }}} </p>
    @endforeach

    {{ $posts->links() }}

@stop