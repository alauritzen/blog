@extends('layouts.master')

@section('top-script')

@stop


@section('content')

<h1>Login page</h1>

{{ Form::open(array('action'=>'UsersController@auth')) }}
    
    <p>
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array ('value'=>Input::old('email'),
        'class'=>'input_box')) }}
    </p>

    <p>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
    </p>

    <p>
        <input type="submit">
    </p>

{{ Form::close() }}

@stop


