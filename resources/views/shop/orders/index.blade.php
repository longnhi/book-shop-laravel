@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{URL::to('/home')}}"><i class="fa fa-home"></i> Home</a>
                    <span>My Orders</span>
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
                    @if($orders->count()==0)
                    <div class="col-lg-12 text-center">Chưa có đơn hàng nào</div>
                    @else
                    @foreach($orders as $key=>$order)
                    <div class="col-12">
                        <div class="row">
                            <!-- simple table -->
                            <div class="col-md-12 my-4">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title">ID: {{$order->id}}</h5>
                                            </div>
                                        </div>
                                        <p class="card-text">Full name: {{$order->name}}.</p>
                                        <p class="card-text">Address: {{$order->address}}.</p>
                                        <p class="card-text">Phone: {{$order->phone}}.</p>
                                        <p class="card-text">Total: $ {{$order->total}}.</p>
                                        <p class="card-text">Status: {{$order->status}}.</p>
                                        <p class="card-text">Date: {{$order->created_at}}.</p>
                                        <div>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($books_order as $key=>$item)
                                                    @if($item->id_order==$order->id)
                                                    <tr>
                                                        <td><img src="{{asset($item->book->image)}}" style="max-width: 100px;"
                                                                class="w-100" alt=""></td>
                                                        <td>{{$item->book->name}}</td>
                                                        <td>{{$item->quantity}}</td>
                                                        <td>$ {{$item->price}}</td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- simple table -->
                        </div> <!-- end section -->
                    </div> <!-- .col-12 -->
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
@endsection