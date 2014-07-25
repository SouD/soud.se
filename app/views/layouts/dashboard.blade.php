@extends('layouts.master')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
@stop

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        @yield('sidebar')
      </div>
      <div class="col-sm-9 col-md-10 main">
        @yield('main')
      </div>
    </div>
  </div>
@stop

@section('footer')
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
          <!-- Sou da yo, Sōda yo -->
          <p>&#12381;&#12358; &#12384; &#12424;</p>
        </div>
      </div>
    </div>
  </div>
@stop
