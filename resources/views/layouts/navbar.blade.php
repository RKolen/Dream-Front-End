<nav id="navbar">

  <ul>
    <li><a href="/">@lang('general.home')</a></li>
    <li><a href="/store">@lang('general.store')</a></li>
    <div class="spacer"></div>

    @if ($logininfo->loggedin)
    <li><a href="#">{{$logininfo->name}}</a></li>
    <li><a href="/logout">@lang('general.logout')</a></li>
    @else
    <li><a href="/login">@lang('general.login')</a></li>
    @endif
  </ul>
</nav>
