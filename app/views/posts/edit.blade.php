@extends('layouts.master')

@section('top-script')

@stop


@section('content')

    <h1>Update a blog post!</h1>
    
    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
    
        <p>
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, array ('value'=>Input::old('title'),
            'class'=>'input_box')) }}

            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        </p>

        <p>
            {{ Form::label('description', 'Body') }}
            {{ Form::textarea('description', null, array('value'=>Input::old('description'), 'class'=>'input_box')) }}

            {{ $errors->first('description', '<span class="help-block">:message</span>') }}
        </p>

        <p>
            <input type="submit">
        </p>

        
    {{ Form::close() }}



@stop