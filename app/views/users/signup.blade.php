@extends('layouts.master')

@section('top-script')
@stop

@section('content')
    
<h1>Sign up</h1>

{{ Form::open(array('action'=>'UsersController@createUser')) }}
    
    <p class="form-input signup-form">
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', null, array('value'=>Input::old('username'), 'class'=>'input_box')) }}
    </p>

    <p class="form-input signup-form">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', null, array ('value'=>Input::old('title'), 'class'=>'input_box')) }}
    </p>

    <p class="form-input signup-form">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    </p>

    <p class="form-input signup-form">
    {{ Form::label('passwordConfirm', 'Confirm password') }}
    {{ Form::password('passwordConfirm') }}
    </p>

    <p>
        <input type="submit">
    </p>

{{ Form::close() }}

@stop
