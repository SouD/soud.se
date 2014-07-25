@extends('layouts.dashboard')

@section('sidebar')
  <ul class="nav nav-sidebar">
    <li><a href="{{ route('dashboard') }}">Overview</a></li>
    <li class="active"><a href="{{ action('Dashboard\ProjectController@index') }}">Projects</a></li>
  </ul>
@stop

@section('main')
  <h1 class="page-header">Projects <small>Showing {{ $project->name }}</small></h1>
  <ul class="nav nav-pills nav-actions">
    <li><a href="{{ action('Dashboard\ProjectController@index') }}">Overview</a></li>
    <li><a href="{{ action('Dashboard\ProjectController@create') }}">Create</a></li>
  </ul>
  <div class="well well-sm">
    <p><strong>Name:</strong> {{ $project->name }}</p>
    <p><strong>Link:</strong> {{ $project->link !== null ? link_to($project->link) : null }}</p>
    <p>
      <strong>Image path:</strong> {{ $project->image }}<br>
      @if($project->image !== NULL)
        <img class="img-responsive project-image" src="{{ asset($project->image) }}">
      @else
        <img class="img-responsive project-image" src="holder.js/214x111/auto/textmode:exact">
      @endif
    </p>
    <p><strong>Brief:</strong> {{ $project->brief }}</p>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    <p><strong>Created at:</strong> {{ $project->created_at }}</p>
    <p><strong>Last updated at:</strong> {{ $project->updated_at }}</p>
  </div>
@stop

@section('scripts')
  <script src="{{ asset('js/holder.js') }}"></script>
@stop
