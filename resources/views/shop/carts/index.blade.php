@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{URL::TO('/home')}}"><i class="fa fa-home"></i> Home</a>
                    <span>Shopping cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
    @if(!empty(Session::get('carts')))
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <form id="update-carts" action="{{ URL::to('/update-carts') }}" method="post">
                                {{ @csrf_field() }}
                                {{ @method_field('PUT')}}
                                @php $total = 0; @endphp
                                @foreach ($book_carts as $key=>$book_cart)
                                @php 
                                    $price = $book_cart->price * $carts[$book_cart->id];
                                    $total += $price;
                                @endphp
                                <tr>
                                    <td class="cart__product__item">
                                        <a href="{{URL::TO('/product/detail/'.$book_cart->id)}}"><img src="{{URL::TO('/'.$book_cart->image)}}" class="img-thumbnail w-25" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>{{$book_cart->name}}</h6>
                                        </div>
                                        </a>
                                    </td>
                                    <td class="cart__price">$ {{$book_cart->price}}</td>    
                                    <td class="cart__quantity">
                                        <div >
                                            <input type="number" class="form-control w-50" required name="quantity[{{$book_cart->id}}]" value="{{$carts[$book_cart->id] }}" min="1">
                                        </div>
                                    </td>
                                    <td class="cart__total">$ {{$price}}</td>
                                    <td class="cart__close"><a href="{{URL::TO('/delete-from-carts/'.$book_cart->id)}}"><span class="icon_close"></span></a></td>
                                </tr>
                                @endforeach
                            </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="{{URL::TO('/product/list')}}">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('update-carts').submit();"><span class="icon_loading"></span> Update cart</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ {{$total}}</span></li>
                            <li>Total <span>$ {{$total}}</span></li>
                        </ul>
                        <a href="{{URL::TO('/checkout')" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="text-center">Không có sản phẩm trong giỏ hàng.</div>
    @endif
</section>
<!-- Shop Cart Section End -->
@endsection