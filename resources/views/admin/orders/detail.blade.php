@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <!-- Small table -->
                <div class="col-md-12 my-4">
                    <h2 class="h4 mb-1">Order Detail</h2>
                    <div class="card shadow">
                        <div class="card-body">
                            <h2 class="h4 mb-1">Fullname: {{$order->name}}</h2>
                            <p class="mb-3">Address: {{$order->address}}</p>
                            <p class="mb-3">Phone: {{$order->phone}}</p>
                            <p class="mb-3">Total: ${{$order->total}}</p>
                            <p class="mb-3">Status: {{$order->status}}</p>
                        </div>
                    </div>
                </div> <!-- customized table -->
            </div> <!-- end section -->
            <div class="row">
                <!-- Small table -->
                <div class="col-md-12 my-4">

                    <div class="card shadow">
                        <div class="card-body">
                            <div class="toolbar row mb-3">
                                <div class="col ml-auto">
                                    <div class="dropdown float-right">
                                        @if($order->status=='Đã giao' || $order->status=='Đã Hủy')
                                        <button class="btn dropdown-toggle disabled" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <strong>Action</strong>
                                        </button>
                                        @else
                                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <strong>Action</strong>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            @if($order->status=='Đang xử lý')
                                                <a class="dropdown-item" href="#" onclick="handle('delivery')">Delivery</a>
                                                <a class="dropdown-item" href="#" onclick="handle('cancel')">Cancel</a>
                                            @endif
                                            @if($order->status=='Đang vận chuyển')
                                                <a class="dropdown-item" href="#" onclick="handle('completed')">Completed</a>
                                                <a class="dropdown-item" href="#" onclick="handle('cancel')">Cancel</a>
                                            @endif
                                            <form id="order-handle" action="{{URL::TO('/admin/orders/detail/handle/'.$order->id )}}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('put') }}
                                                <input type="text" id="input-order-handle" name="handle">
                                            </form>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- table -->
                            <table class="table  table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order_details as $key=>$order_detail)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-muted">{{ $order_detail->id }}</p>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset($order_detail->book->image) }}" alt="..."
                                                    class="avatar-img">
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $order_detail->book->name }}</strong>
                                            </p>
                                        </td>
                                        <td class="text-muted"><strong>{{ $order_detail->quantity }}</strong></td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $order_detail->price }} $</strong></p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- customized table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
<script>
    var handle = function(data) {
        event.preventDefault();
        document.getElementById('input-order-handle').value = data;
        document.getElementById('order-handle').submit();
    };
</script>
@endsection