@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
        <h1>An error occurred:</h1>
        <div class="well">
          <h2>404 Not Found.</h2>
          <p>Requested page not found.</p>
          <a href="{{ route('base') }}">Home</a>
        </div>
      </div>
    </div>
  </div>
@stop
