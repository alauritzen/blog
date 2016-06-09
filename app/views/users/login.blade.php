@extends('layouts.master')

@section('top-script')

@stop


@section('content')

<h1>Login page</h1>

{{ Form::open(array('action'=>'UsersController@auth')) }}
    
    <p class="form-input login-form">
        {{ Form::label('email', 'Email') }}
        <span class="inline-form">{{ Form::email('email', null, array ('value'=>Input::old('email'),
        'class'=>'input_box')) }}<span>
    </p>

    <p class="form-input login-form">
        {{ Form::label('password', 'Password') }}
        <span class="inline-form">{{ Form::password('password') }}</span>
    </p>

    <p>
        <input type="submit">
    </p>

{{ Form::close() }}

@stop


