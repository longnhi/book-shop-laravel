@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{URL::to('/home')}}"><i class="fa fa-home"></i> Home</a>
                    <a href="{{URL::to('/product/list')}}"></i> Book</a>
                    <span>Author: {{$i_author->name}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                @include('shop.products.shop_sidebar')
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    @if($books->count()==0)
                        <div class="col-lg-12 text-center">Không tìm thấy sản phẩm nào</div>
                    @else
                        @foreach($books as $key=>$book)
                        <div class="col-lg-4 col-md-6">
                            @include('shop.products.item')
                        </div>
                        @endforeach
                        @include('shop.products.pagination')
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
@endsection