@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{URL::TO('/')}}"><i class="fa fa-home"></i>Trang chủ</a>
                    <span>Đăng nhập</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Login Section Begin -->
<section class="checkout spad">
    <div class="container">
        <form action="{{URL::TO('/user/login')}}" class="checkout__form" method="post">
            {{ csrf_field() }}
            <h5 class="text-center">Đăng nhập</h5>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    @if (Session::has('error'))
                        <div class="alert alert-warning" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="checkout__form__input">
                        <p>Email <span>*</span></p>
                        <input type="email" name="email" required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="checkout__form__input">
                        <p>Account Password <span>*</span></p>
                        <input type="password" name="password" required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="text-center">
                        <div class="p-2">
                            <button type="submit" class="site-btn">Đăng nhập</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"></div>
            </div>
        </form>
    </div>
</section>
<!-- Login Section End -->
@endsection