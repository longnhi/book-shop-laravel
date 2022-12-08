@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{URL::to('/home')}}"><i class="fa fa-home"></i> Home</a>
                    <a href="{{URL::to('/product/list')}}">Book</a>
                    <span>Search :{{$name}}</span>
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