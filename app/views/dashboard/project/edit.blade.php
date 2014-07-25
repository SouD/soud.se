@extends('layouts.dashboard')

@section('sidebar')
  <ul class="nav nav-sidebar">
    <li><a href="{{ route('dashboard') }}">Overview</a></li>
    <li class="active"><a href="{{ action('Dashboard\ProjectController@index') }}">Projects</a></li>
  </ul>
@stop

@section('main')
  <h1 class="page-header">Projects <small>Editing {{ $project->name }}, last edited at {{ $project->updated_at }}</small></h1>
  <ul class="nav nav-pills nav-actions">
    <li><a href="{{ action('Dashboard\ProjectController@index') }}">Overview</a></li>
    <li><a href="{{ action('Dashboard\ProjectController@create') }}">Create</a></li>
  </ul>
  @if($errors->count() > 0)
    <div class="alert alert-danger alert-dissmissable" role="alert">
      <button class="close" type="button" data-dismiss="alert">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
      </button>
      {{ HTML::ul($errors->all()) }}
    </div>
  @endif
  <div class="well well-sm">
    {{ Form::model($project, array('route' => array('dashboard.project.update', $project->id), 'method' => 'PUT', 'role' => 'form', 'files' => true)) }}
      <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Project name', 'required')) }}
      </div>
      <div class="form-group">
        {{ Form::label('link', 'Link') }}
        {{ Form::text('link', null, array('class' => 'form-control', 'placeholder' => 'Project link')) }}
      </div>
      <div class="form-group">
        {{ Form::label('image', 'Image') }}
        {{ Form::text('image', null, array('class' => 'form-control', 'placeholder' => 'Project image')) }}
        {{ Form::label('new_image', 'New Image') }}
        {{ Form::file('new_image') }}
      </div>
      <div class="form-group">
        {{ Form::label('brief', 'Brief') }}
        {{ Form::text('brief', null, array('class' => 'form-control', 'placeholder' => 'Project brief', 'required')) }}
      </div>
      <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => 'Project description', 'required')) }}
      </div>
      <button class="btn btn-primary" type="submit">Submit changes</button>
    {{ Form::close() }}
  </div>
@stop
