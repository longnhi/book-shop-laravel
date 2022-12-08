<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <ul class="nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar avatar-sm mt-2">
                <strong>{{ Auth::check() ? 'Hi, '.Auth::user()->name : 'Tài khoản' }}</strong>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{URL::TO('/home')}}" target="_blank">Shop</a>
            <a class="dropdown-item" href="#"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{URL::TO('/user/logout')}}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
        </li>
    </ul>
</nav>