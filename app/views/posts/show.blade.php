@extends('layouts.master')

@section('top-script')
    
@stop

@section('content')
    <div class='post-show'>
        <h2> {{{ $post->title }}} </h2> 
        <p> {{{ $post->description }}} </p>
        <p class="small">Posted by: {{{ $post->user->username }}}</p>
        <p class="small"> {{{ $post->converted_create_time }}}</p>
        @if(Auth::user())
            @if($post->user_id==Auth::user()->id)
                <button><a href={{action('PostsController@edit', $post->id)}}>Edit</a></button>
                <button id="delete-post-btn">Delete</button>
                {{-- empty form for delete function --}}
                {{ Form::open([
                    'action' => ['PostsController@destroy', $post->id],
                    'id' => 'delete-post-form',
                    'method' => 'DELETE'
                ]) }}
                {{ Form::close() }}
            @endif
        @endif
    </div>
@stop

@section('bottom-script')
<script src="/js/blog_js.js"></script>
@stop