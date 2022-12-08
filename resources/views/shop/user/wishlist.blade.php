@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{URL::TO('/home')}}"><i class="fa fa-home"></i> Home</a>
                    <span>Wishlist</span>
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
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    @if($books_wishlist->count()==0)
                        <div class="col-lg-12 text-center">Chưa thích sản phẩm nào</div>
                    @else
                        @foreach($books_wishlist as $key=>$data)
                            <div class="col-lg-3 col-md-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{asset($data->book->image)}}">
                                        <ul class="product__hover">
                                            <li><a href="{{URL::TO('/product/detail/'.$data->book->id )}}"><span class="arrow_expand"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" onclick="event.preventDefault(); 
                                                    document.getElementById('remove_from_wishlist_{{$data->id}}').submit();">
                                                    <span class="icon_heart"></span>
                                                </a>
                                                <form id="remove_from_wishlist_{{$data->id}}" action="{{URL::TO('/remove-from-wishlist/'.$data->id)}}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                </form>
                                            </li>
                                            <li>
                                                <a href="#" onclick="event.preventDefault();document.getElementById('add_to_card_{{$data->book->id}}').submit();"><span class="icon_cart_alt"></span></a>
            
                                                <form id="add_to_card_{{$data->book->id}}" action="{{URL::TO('/add-to-carts')}}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    <input type="text" name="id" value="{{$data->book->id}}">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{URL::TO('/product/detail/'.$data->book->id )}}">{{ $data->book->name }}</a></h6>
                                        <div class="product__price">$ {{ $data->book->price }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
@endsection