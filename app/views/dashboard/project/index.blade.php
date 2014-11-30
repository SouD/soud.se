@extends('layouts.dashboard')

@section('main')
  <h1 class="page-header">Projects <small>Overview</small></h1>
  <ul class="nav nav-pills nav-actions">
    <li class="active"><a href="{{ action('Dashboard\ProjectController@index') }}">Overview</a></li>
    <li><a href="{{ action('Dashboard\ProjectController@create') }}">Create</a></li>
  </ul>
  @if(Session::has('message'))
    <div class="alert alert-success alert-dissmissable" role="alert">
      <button class="close" type="button" data-dismiss="alert">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
      </button>
      {{ Session::get('message') }}
    </div>
  @endif
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @if(count($projects) > 0)
          @foreach($projects as $project)
            <tr>
              <td>{{ $project->name }}</td>
              <td>
                @if($project->trashed())
                  {{ Form::open(array('action' => array('Dashboard\ProjectController@restore', $project->id), 'class' => 'pull-right', 'role' => 'form')) }}
                    <button class="btn btn-warning" type="submit">Restore</button>
                  {{ Form::close() }}
                @else
                  {{ Form::open(array('route' => array('dashboard.project.destroy', $project->id), 'method' => 'DELETE', 'class' => 'pull-right', 'role' => 'form')) }}
                    <button class="btn btn-danger" type="submit">Delete</button>
                  {{ Form::close() }}
                @endif
                <a href="{{ action('Dashboard\ProjectController@show', array($project->id)) }}" class="btn btn-success" role="button">Show</a>
                <a href="{{ action('Dashboard\ProjectController@edit', array($project->id)) }}" class="btn btn-info" role="button">Edit</a>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td colspan="2" class="text-center">There doesn't seem to be anything here...</td>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
@stop
