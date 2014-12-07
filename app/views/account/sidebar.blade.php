<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
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
  </ul>
</div>
