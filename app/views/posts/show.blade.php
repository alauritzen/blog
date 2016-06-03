@extends('layouts.master')

@section('content')

    <h2> {{{ $post->title }}} </h2> 
    <p> {{{ $post->description }}} </p>
    <button><a href="{{action('PostsController@edit', $post->id)}}">Edit</a></button>
@stop