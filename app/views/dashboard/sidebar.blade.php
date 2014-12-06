<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li @if(Route::currentRouteName() == 'dashboard') class="active" @endif>
      <a href="{{ route('dashboard') }}">Overview</a>
    </li>
    <li @if(Request::is('dashboard/project*')) class="active" @endif>
      <a href="#projects">Projects</a>
    </li>
  </ul>
</div>
