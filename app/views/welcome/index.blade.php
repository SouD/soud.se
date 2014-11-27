@extends('layouts.master')

@section('content')
  <div class="container">

    <!-- Presentation -->
    <div class="row">
      <div class="col-xs-12">
        <h1 class="text-center">Hello</h1>
      </div>
      <div class="col-xs-12">
        <img class="img-circle img-responsive center-block presentation-portrait" src="{{ asset('img/portrait.png') }}" alt="Portrait">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <h1 class="text-center">Who am I?</h1>
        <p>My name is Linus Sörensen and I am a happy {{ $age }} year old coffee powered code machine from the western parts of Sweden and this is my personal evil laboratory. Beware all ye who step into here, for here there be monsters!</p>
        <p>All jokes aside though, here you can find most things relevant to me, ranging from personal projects to musings about which metal band is the best. Check the links down below to find me on other sites.</p>
        <p><small>P.S. Please excuse my horrible design of this page! I am as artsy as a doorknob.</small></p>
      </div>
    </div>

    <!-- Social -->
    <div class="row social">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <div class="row social-group">
          <div class="col-xs-12 col-sm-6">
            <a class="social-button" href="https://github.com/SouD">
              <div class="row">
                <div class="col-xs-4">
                  <i class="fa fa-github fa-4x fa-fw social-icon social-icon-github"></i>
                </div>
                <div class="col-xs-8">
                  <h4>Clone me!</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6">
            <a class="social-button" href="https://www.linkedin.com/pub/linus-s%C3%B6rensen/84/343/47a">
              <div class="row">
                <div class="col-xs-4">
                  <i class="fa fa-linkedin fa-4x fa-fw fa-inverse social-icon social-icon-linkedin"></i>
                </div>
                <div class="col-xs-8">
                  <h4>Check me out!</h4>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row social-group">
          <div class="col-xs-12 col-sm-6">
            <a class="social-button" href="https://www.facebook.com/linus.sorensen.3">
              <div class="row">
                <div class="col-xs-4">
                  <i class="fa fa-facebook fa-4x fa-fw fa-inverse social-icon social-icon-facebook"></i>
                </div>
                <div class="col-xs-8">
                  <h4>Message me!</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6">
            <a class="social-button" href="https://twitter.com/TheRealSouD">
              <div class="row">
                <div class="col-xs-4">
                  <i class="fa fa-twitter fa-4x fa-fw fa-inverse social-icon social-icon-twitter"></i>
                </div>
                <div class="col-xs-8">
                  <h4>Tweet @ me!</h4>
                </div>
              </div>
            </a>
          </div>
        </div>
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
