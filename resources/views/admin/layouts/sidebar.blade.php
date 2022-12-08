<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{URL::TO('/home')}}" target="_blank">
                Shop
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{URL::TO('/admin')}}" class="nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-menu fe-16"></i>
                    <span class="ml-3 item-text">Categorys</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/categorys/create')}}"><span class="ml-1 item-text">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/categorys/list')}}"><span
                                class="ml-1 item-text">List</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">Publishers</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/publishers/create')}}"><span class="ml-1 item-text">Add</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/publishers/list')}}"><span class="ml-1 item-text">List</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Authors</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/authors/create')}}"><span class="ml-1 item-text">Add</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/authors/list')}}"><span class="ml-1 item-text">List</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">Books</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/products/create')}}"><span class="ml-1 item-text">Add</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/products/list')}}"><span
                                class="ml-1 item-text">List</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Accounts</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="users">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/users/list')}}"><span
                                class="ml-1 item-text">List</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#orders" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-shopping-bag fe-16"></i>
                    <span class="ml-3 item-text">Orders</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="orders">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{URL::TO('/admin/orders/list')}}"><span
                                class="ml-1 item-text">List</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>