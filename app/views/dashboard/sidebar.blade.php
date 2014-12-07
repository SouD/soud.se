<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li @if(Route::currentRouteName() == 'dashboard') class="active" @endif>
      <a href="{{ route('dashboard') }}">
      	<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Overview
      </a>
    </li>
    <li @if(Request::is('dashboard/project*')) class="active" @endif>
      <a href="#projects">
      	<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Projects
      </a>
    </li>
    <li @if(Request::is('dashboard/project*')) class="active" @endif>
      <a href="#stats">
      	<span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Stats
      </a>
    </li>
  </ul>
</div>
