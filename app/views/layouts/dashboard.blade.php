@extends('layouts.master')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
@stop

@section('navbar')
  @include('includes.navbar')
@stop

@section('content')
  <div class="container-fluid">
    <div class="row">
      @yield('sidebar')
      @yield('main')
    </div>
  </div>
@stop
