<nav id="navbar">

  <ul>
    <li><a href="/">@lang('general.home')</a></li>
    <li><a href="/store">@lang('general.store')</a></li>
    <div class="spacer"></div>
    <li><a href="{{env('BACKEND_URL') . '/downloads/app'}}">@lang('general.appdownload')</a></li>

   

    @if ($logininfo->loggedin)
    <li><a href="/users/{{$logininfo->id}}">{{$logininfo->name}}</a></li>
    <li><a href="/logout">@lang('general.logout')</a></li>
    @else
    <li><a href="/login">@lang('general.login')</a></li>
    <li><a href="/register">Register</a></li>
    @endif
  </ul>
</nav>
