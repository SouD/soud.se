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

        <li class="dropdown @if(Request::is('dashboard*')) active @endif">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dashboard <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li @if(Request::is('dashboard')) class="active" @endif>
              <a href="{{ route('dashboard') }}">
                <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Overview
              </a>
            </li>
            <li>
              <a href="#dashboard_projects">
                <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Projects
              </a>
            </li>
            <li>
              <a href="#dashboard_charts">
                <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Stats
              </a>
            </li>
          </ul>
        </li>
        <li class="dropdown @if(Request::is('account*')) active @endif">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{{ Auth::user()->email }}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li @if(Route::currentRouteName() == 'account.profile') class="active" @endif>
              <a href="{{ route('account.profile') }}">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile
              </a>
            </li>
            <li @if(Route::currentRouteName() == 'account.settings') class="active" @endif>
              <a href="#settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Settings
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('logout') }}">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log out
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
