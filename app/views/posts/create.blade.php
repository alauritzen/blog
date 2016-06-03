@extends('layouts.master')

@section('content')
    <h1>Create a blog post!</h1>
    
    <form method='POST' action="{{{ action('PostsController@store') }}}">
        <p>
            <label for="title">Title</label>
            <input id="title" name="title" type="text" value="{{{ Input::old('title') }}}">
            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        </p>

        <p>
            <label for="description">Body</label>
            <input id="description" name="description" type="textarea" value="{{{ Input::old('description') }}}">
            {{ $errors->first('description', '<span class="help-block">:message</span>') }}
        </p>

        <p>
            <input type="submit">
        </p>

        
    </form>


@stop