@extends('layouts.master')

@section('title')
    Portfolio
@stop

@section('top-script')
    
@stop

@section('content')
    <h1>Portfolio</h1>
    <ul class="list-unstyled">
        <li><h2>adlister<h2></li>
        <li><h2>National Parks<h2></li>
        <li><a href={{{action('HomeController@showWeather')}}}><h2>Weather map</h2></a></li>
        <p>Uses APIs from google maps and openweathermap.org to display multiday weather forecast. Includes draggable marker and text field to change location and update forecast. Other technologies used: HTML, CSS, jQuery</p>
        <li><a href={{{action('HomeController@whackAMole')}}}><h2>Catch the Rings</h2></a></li>
        <p>A simple Whack-A-Mole game that uses jQuery to recognize user events.</p>
        <li><h2>Simple Simon<h2></li>
        <li><h2>Poem wave<h2></li>
        
    </ul>
@stop