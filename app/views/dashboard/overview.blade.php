@extends('layouts.dashboard')

@section('sidebar')
  <ul class="nav nav-sidebar">
    <li class="active"><a href="{{ route('dashboard') }}">Overview</a></li>
    <li><a href="{{ action('Dashboard\ProjectController@index') }}">Projects</a></li>
  </ul>
@stop

@section('main')
  <h1 class="page-header">Overview</h1>
  <p>Someday there might actually be something here!</p>
@stop
