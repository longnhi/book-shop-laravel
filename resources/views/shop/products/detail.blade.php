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
                    <span>{{ $book->name }}</span>
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
            <div class="col-lg-6">
                <div class="product__details__pic">
                <img class="product__big__img" src="{{asset('/'.$book->image) }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <h3>{{ $book->name }} 
                        <span>Category: <a href="{{URL::to('/products-by-category/'.$book->category->id)}}">{{ $book->category->name }}</a></span>
                        <span>Publisher: <a href="{{URL::to('/products-by-publisher/'.$book->publisher->id)}}">{{ $book->publisher->name }}</a></span>
                        <span>Author: <a href="{{URL::to('/author/detail/'.$book->author->id)}}">{{ $book->author->name }}</a></span>
                    </h3>
                    <div class="product__details__price">$ {{ $book->price }}</div>
                    <p>{{ $book->information }}</p>
                    <div class="product__details__button">
                        
                        <a href="#" class="cart-btn" 
                            onclick="event.preventDefault();
                                document.getElementById('add_to_card_{{$book->id}}').submit();">
                            <span class="icon_cart_alt"></span> Add to cart
                        </a>
                        <form id="add_to_card_{{$book->id}}" action="{{URL::to('/add-to-carts')}}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            <input type="text" name="id" value="{{$book->id}}">
                        </form>

                        @if(!Auth::check())
                            <a href="{{URL::to('login')}}" class="cart-btn" >
                                <span class="icon_heart_alt"></span> Add to Wishlist
                            </a>
                        @elseif(Auth::check() && App\Models\Wishlist::where('id_book',$book->id)->where('id_user',Auth::user()->id)->get()->count()>0)
                        
                            @php
                                $wishlist = App\Models\Wishlist::where('id_book',$book->id)->where('id_user',Auth::user()->id)->get()
                            @endphp
                            <a href="#" class="cart-btn" onclick="event.preventDefault(); 
                                document.getElementById('remove_from_wishlist_{{$book->id}}').submit();">
                                <span class="icon_heart"></span> Remove from Wishlist
                            </a>
                            <form id="remove_from_wishlist_{{$book->id}}" action="{{URL::to('/remove-from-wishlist/'.$wishlist[0]->id)}}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                            </form>
                        
                        @else
                            <a href="#" class="cart-btn" onclick="event.preventDefault(); 
                                document.getElementById('add_to_wishlist_{{$book->id}}').submit();">
                                <span class="icon_heart_alt"></span> Add to Wishlist
                            </a>
                            <form id="add_to_wishlist_{{$book->id}}" action="{{URL::to('/add-to-wishlist')}}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                <input type="text" name="id_book" value="{{$book->id}}">
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <hr>
        @if($books_category->count()>0)

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>Books of the same category</h5>
                    </div>
                </div>
                @foreach($books_category as $key=>$book)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        @include('shop.products.item')
                    </div>
                @endforeach
            </div>

        @endif
        
        @if($books_publisher->count()>0)
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>Books of the same publisher</h5>
                    </div>
                </div>
                @foreach($books_publisher as $key=>$book)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        @include('shop.products.item')
                    </div>
                @endforeach
            </div>
        @endif
        
        @if($books_author->count()>0)
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>Books of the same author</h5>
                    </div>
                </div>
                @foreach($books_author as $key=>$book)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        @include('shop.products.item')
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
<!-- Product Details Section End -->
@endsection