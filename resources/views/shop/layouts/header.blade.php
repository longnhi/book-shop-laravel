
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__close">+</div>
    <ul class="offcanvas__widget">
        <li><span class="icon_search search-switch"></span></li>
        <li><a href="{{ URL::to('/carts')}}"><span class="icon_cart_alt"></span>
                <div class="tip">
                    {{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}</div>
            </a></li>
    </ul>
    <div class="offcanvas__logo">
        <a href="{{URL::to('/home')}}"><img src="{{asset('/templates/shop/img/download.png')}}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="{{URL::to('/home')}}"><img src="{{asset('/templates/shop/img/download.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{ URL::to('/product/list')}}">Shop</a></li>
                        <li><a href="#">Category</a>
                            <ul class="dropdown">
                                @foreach($categories as $key=>$data)
                                <li><a href="{{ URL::to('/products-by-category/'.$data->id)}}">{{$data->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ URL::to('/author/list')}}">Author</a></li>
                        <li><a href="#">Publisher</a>
                            <ul class="dropdown">
                                @foreach($main_publishers as $key=>$data)
                                <li><a href="{{ URL::to('/products-by-publisher/'.$data->id)}}">{{$data->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ URL::to('/contact')}}">Contact</a></li>
                        <li><a href="#">{{ Auth::check() ? 'Hi, '.Auth::user()->name : 'Tài khoản' }}</a>
                            <ul class="dropdown">
                                @guest
                                <li><a href="{{ URL::to('/login')}}">Login</a></li>
                                <li><a href="{{ URL::to('/register')}}">Register</a></li>
                                @else
                                @if (Auth::user()->role == 'admin')
                                <li><a href="{{ URL::to('/admin')}}">Dashboard</a></li>
                                @endif
                                <li><a href="{{ URL::to('/wishlist')}}">Wishlist</a></li>
                                <li><a href="{{ URL::to('/my-orders')}}">Order</a></li>
                                <li><a href="#" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout
                                    </a>
                                    <form id="logout-form" action="{{ URL::to('/user/logout')}}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                @endguest
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__right">
                    <ul class="header__right__widget">
                        <li><span class="icon_search search-switch"></span></li>
                        <li><a href="{{ URL::to('/carts')}}"><span class="icon_cart_alt"></span>
                                <div class="tip">
                                    {{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" method="GET" action="{{ URL::to('/product/search/')}}">
            <input type="text" id="search-input" name="name" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->