@extends('layouts.master')

@section('top-script')
@stop

@section('content')
    
<h1>Sign up</h1>

{{ Form::open(array('action'=>'UsersController@createUser')) }}
    
    <p class="form-input signup-form">
        {{ Form::label('username', 'Username') }}
        <span class="inline-form">
            {{ Form::text('username', null, array('value'=>Input::old('username'), 'class'=>'input_box')) }}
        </span>
    </p>

    <p class="form-input signup-form">
        {{ Form::label('email', 'Email') }}
        <span class="inline-form">
            {{ Form::email('email', null, array ('value'=>Input::old('title'), 'class'=>'input_box')) }}
        </span>
    </p>

    <p class="form-input signup-form">
        {{ Form::label('password', 'Password') }}
        <span class="inline-form">
            {{ Form::password('password') }}
        </span>
    </p>

    <p class="form-input signup-form">
        {{ Form::label('passwordConfirm', 'Confirm password') }}
        <span class="inline-form">
            {{ Form::password('passwordConfirm') }}
        </span>
    </p>

    <p>
        <input type="submit">
    </p>

{{ Form::close() }}

@stop
