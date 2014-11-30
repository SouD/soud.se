<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('base') }}">SouD</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li @if(Request::is('dashboard*')) class="active" @endif>
          <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li @if(Route::currentRouteName() == 'settings') class="active" @endif>
          <a href="#settings">Settings</a>
        </li>
        <li @if(Route::currentRouteName() == 'profile') class="active" @endif>
          <a href="#profile">{{{ Auth::user()->email }}}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
