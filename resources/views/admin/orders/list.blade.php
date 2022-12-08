@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <!-- Small table -->
                <div class="col-md-12 my-4">
                    <h2 class="h4 mb-1">Quản lý đơn hàng</h2>
                    
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="toolbar">
                            </div>
                            <!-- table -->
                            <table class="table table-borderless table-hover">
                                <thead class="thead-dark">
                                    <tr>
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
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{$order->id}}</strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{$order->name}}</strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{$order->address}}</strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>$ {{$order->phone}}</strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{$order->total}}</strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{$order->created_at}}</strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{$order->status}}</strong></p>
                                        </td>
                                        <td>
                                            <a class="card-link" href="{{URL::TO('/admin/orders/detail/'.$order->id)}}"><span class="fe fe-24 fe-eye"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <nav aria-label="Table Paging" class="mb-0 text-muted">
                                <ul class="pagination justify-content-center mb-0">

                                    @if($orders->currentPage() == 1)
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $orders->previousPageUrl() }}"><strong>Previous</strong></a></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $orders->previousPageUrl() }}"><strong>Previous</strong></a></li>
                                    @endif

                                    @for($i=1; $i<=$orders->lastPage();$i++)
                                        @if($i==$orders->currentPage())
                                            <li class="page-item active"><a class="page-link"
                                                href="#"><strong>{{ $orders->currentPage() }}</strong></a></li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                href="{{$orders->url($i)}}"><strong>{{ $i }}</strong></a></li>
                                        @endif
                                    @endfor

                                    @if($orders->currentPage() == $orders->lastPage())
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $orders->nextPageUrl() }}"><strong>Next</strong></a></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $orders->nextPageUrl() }}"><strong>Next</strong></a></li>
                                    @endif

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> <!-- customized table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection