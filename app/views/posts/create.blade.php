@extends('layouts.master')

@section('top-script')
    <style>
        .input_box {
            left-padding: 300px;
        }
    </style>
@stop

@section('content')
    <h1>Create a blog post!</h1>
    
    {{ Form::open(array('action'=>'PostsController@store')) }}
    
        <p>
            {{ Form::label('title', 'Title') }}
        </p>
        <p class="form-input">
            {{ Form::text('title', null, array ('value'=>Input::old('title'),
            'class'=>'input_box')) }}

            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        </p>

        <p>
            {{ Form::label('description', 'Body') }}
        </p>
        <p class="form-input">
            {{ Form::textarea('description', null, array('value'=>Input::old('description'), 'class'=>'input_box')) }}

            {{ $errors->first('description', '<span class="help-block">:message</span>') }}
        </p>

        <p>
            <input type="submit">
        </p>

        
    {{ Form::close() }}


@stop