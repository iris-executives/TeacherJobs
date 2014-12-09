@section("header")
  <div class="header">
    <div class="container">
      <h1>Teacher Jobs</h1> &nbsp;&nbsp;
        <a href="{{ URL::to("/") }}">
          Home
        </a>
        @if (Auth::check())
        <a href="{{ URL::route("user/logout") }}">
          logout
        </a> |
        <a href="{{ URL::route("user/profile") }}">
          profile
        </a>
      @else
        <a href="{{ URL::route("user/login") }}">
          login
        </a>
        <a href="{{ URL::route("user/register") }}">
          register
        </a>
      @endif 
    </div>
  </div>
@show