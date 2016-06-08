@extends('layouts.master')

@section('top-script')
    <style>
        
        }
    </style>
@stop

@section('content')

    <h2> {{{ $post->title }}} </h2> 
    <p> {{{ $post->description }}} </p>
    <p><small>Created: {{ $post->converted_create_time }}</small></p>

    @if($post->user_id==Auth::user())
        <button><a href={{action('PostsController@edit', $post->id)}}>Edit</a></button>
        <button><a href="#">Delete</a></button>
    @endif

@stop