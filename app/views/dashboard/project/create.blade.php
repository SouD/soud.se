@extends('layouts.dashboard')

@section('main')
  <h1 class="page-header">Projects <small>Create new project</small></h1>
  <ul class="nav nav-pills nav-actions">
    <li><a href="{{ action('Dashboard\ProjectController@index') }}">Overview</a></li>
    <li class="active"><a href="{{ action('Dashboard\ProjectController@create') }}">Create</a></li>
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
    {{ Form::open(array('url' => 'dashboard/project', 'role' => 'form', 'files' => true)) }}
      <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Project name', 'required')) }}
      </div>
      <div class="form-group">
        {{ Form::label('link', 'Link') }}
        {{ Form::text('link', Input::old('link'), array('class' => 'form-control', 'placeholder' => 'Project link')) }}
      </div>
      <div class="form-group">
        {{ Form::label('image', 'Image') }}
        {{ Form::file('image') }}
      </div>
      <div class="form-group">
        {{ Form::label('brief', 'Brief') }}
        {{ Form::text('brief', Input::old('brief'), array('class' => 'form-control', 'placeholder' => 'Project brief', 'required')) }}
      </div>
      <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control', 'placeholder' => 'Project description', 'required')) }}
      </div>
      <button class="btn btn-primary" type="submit">Create</button>
    {{ Form::close() }}
  </div>
@stop
