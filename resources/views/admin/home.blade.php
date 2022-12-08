@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-0 bg-primary text-white">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-sm bg-primary-light">
                                        <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                                    </span>
                                </div>
                                <div class="col pr-0">
                                    <p class="small text-muted mb-0">Orders</p>
                                    <span class="h3 mb-0  text-white">{{$count_order}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-sm bg-primary">
                                        <i class="fe fe-16 fe-users text-white mb-0"></i>
                                    </span>
                                </div>
                                <div class="col pr-0">
                                    <p class="small text-muted mb-0">Accounts</p>
                                    <span class="h3 mb-0">{{$count_user}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-sm bg-primary">
                                        <i class="fe fe-16 fe-book text-white mb-0"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-0">Books</p>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">
                                            <span class="h3 mr-2 mb-0">{{$count_book}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-sm bg-primary">
                                        <i class="fe fe-16 fe-user text-white mb-0"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-0">Authors</p>
                                    <span class="h3 mb-0">{{$count_author}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
            <div class="row">
                <!-- Recent orders -->
                <div class="col-md-12">
                    <h6 class="mb-3">Last orders</h6>
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr role="row">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key=>$order)
                            <tr>
                                <th scope="col">{{$order->id}}</th>
                                <td>{{$order->name}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->phone}}</td>
                                <td>$ {{$order->total}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->status}}</td>
                                <td>
                                    <a class="card-link" href="{{URL::TO('/admin/orders/detail/'.$order->id)}}"><span class="fe fe-24 fe-eye"></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- / .col-md-3 -->
            </div> <!-- end section -->
        </div>
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection