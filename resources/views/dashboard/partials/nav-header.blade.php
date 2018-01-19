<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <i class="icon-reorder shaded"></i></a><a class="brand" href="{{ url('dashboard') }}">Sociolla Blog App</a>
        <div class="nav-collapse collapse navbar-inverse-collapse">
          <ul class="nav pull-right">
            <li><a href="#">{{ Auth::user()->name }}</a></li>
            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('images/user.png') }}" class="nav-avatar" />
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                {{-- <li class="divider"></li> --}}
                <li><a href="{{ url('logout') }}">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
  </div>
</div>