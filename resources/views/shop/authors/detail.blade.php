@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{URL::TO('/home')}}"><i class="fa fa-home"></i> Home</a>
                    <a href="{{URL::TO('/product/list')}}">Book</a>
                    <span>{{ $author->name }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="product__details__pic">
                    <img class="product__big__img" src="{{asset( $author->avatar )}}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="product__details__text">
                    <h3>{{ $author->name }}</h3>
                    <p>{{ $author->information }}</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="related__title">
                    <h5>Books Of {{$author->name}}</h5>
                </div>
            </div>
            @foreach($books as $key=>$book)
                <div class="col-lg-3 col-md-6">
                    @include('shop.products.item')
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Product Details Section End -->
@endsection