@extends('layouts.master')

@section('top-script')
    <style>
        
        }
    </style>
@stop

@section('content')
    <div class='post-show'>
        <h2> {{{ $post->title }}} </h2> 
        <p> {{{ $post->description }}} </p>
        <p><small>Posted by: {{{ $post->user->username }}}</small></p>
        <p><small> {{{ $post->converted_create_time }}}</small></p>

        @if($post->user_id==Auth::user()->id)
            <button><a href={{action('PostsController@edit', $post->id)}}>Edit</a></button>
            <button><a href="#">Delete</a></button>
        @endif
    </div>
@stop