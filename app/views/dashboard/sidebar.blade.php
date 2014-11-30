<ul class="nav nav-sidebar">
  <li @if(Route::currentRouteName() == 'dashboard') class="active" @endif>
    <a href="{{ route('dashboard') }}">Overview</a>
  </li>
  <li @if(Request::is('dashboard/project*')) class="active" @endif>
    <a href="{{ action('Dashboard\ProjectController@index') }}">Projects</a>
  </li>
</ul>
