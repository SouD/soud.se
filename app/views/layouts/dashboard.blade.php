@extends('layouts.master')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        @include('dashboard.sidebar')
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        @yield('main')
      </div>
    </div>
  </div>
@stop
