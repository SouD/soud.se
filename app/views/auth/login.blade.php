@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <!-- bootstrap login template -->
        {{ Form::open(array('url' => 'login', 'class' => 'form-signin', 'role' => 'form')) }}
          <h2 class="form-signin-heading">Please sign in</h2>
          <input class="form-control" name="email" type="email" placeholder="Email address" required autofocus>
          <input class="form-control" name="password" type="password" placeholder="Password" required>
          <div class="checkbox">
            <label>
              <input name="remember" type="checkbox" value="remember"> Remember me
            </label>
          </div>
          <button class="btn btn-primary" type="submit">Sign in</button>
        </form>
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
