@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{URL::TO('/home')}}"><i class="fa fa-home"></i> Home</a>
                    <span>Checkout</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <form action="{{URL::TO('/place-order')}}" class="checkout__form" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h5>Billing detail</h5>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="checkout__form__input">
                                <p>Name <span>*</span></p>
                                <input type="text" name="name" required >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <p>Address <span>*</span></p>
                                <input type="text" name="address" required >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <p>Phone <span>*</span></p>
                                <input type="text" name="phone" required >
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="site-btn">Place oder</button>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </form>
    </div>
</section>
<!-- Checkout Section End -->
@endsection