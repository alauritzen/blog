@extends('layouts.master')

@section('content')

    <h2> {{{ $post->title }}} </h2> 
    <p> {{{ $post->description }}} </p>
    <p><small>Created: {{ $post->converted_create_time }}</small></p>
    <button><a href="{{action('PostsController@edit', $post->id)}}">Edit</a></button>
@stop