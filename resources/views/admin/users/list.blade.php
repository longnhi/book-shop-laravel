@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <!-- Small table -->
                <div class="col-md-12 my-4">
                    <h2 class="h4 mb-1">Quản lý khách hàng</h2>
                    
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
                                        <th>Email</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key=>$user)
                                    <tr>
                                        
                                        <td>
                                            <p class="mb-0 text-muted">{{ $user->id }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong> {{ $user->name }} </strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $user->email }}</strong>
                                            </p>
                                        </td>
                                        <td class="text-muted"><strong>{{$user->role}}</strong></td>
                                        
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <nav aria-label="Table Paging" class="mb-0 text-muted">
                                <ul class="pagination justify-content-center mb-0">
                                    @if($users->currentPage() == 1)
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $users->previousPageUrl() }}"><strong>Previous</strong></a>
                                        </li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $users->previousPageUrl() }}"><strong>Previous</strong></a>
                                        </li>
                                    @endif

                                    @for($i=1; $i<=$users->lastPage();$i++)
                                        @if($i==$users->currentPage())
                                            <li class="page-item active"><a class="page-link"
                                                href="#"><strong>{{ $users->currentPage() }}</strong></a></li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                href="{{$users->url($i)}}"><strong>{{ $i }}</strong></a></li>
                                        @endif
                                    @endfor

                                    @if($users->currentPage() == $users->lastPage())
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $users->nextPageUrl() }}"><strong>Next</strong></a></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $users->nextPageUrl() }}"><strong>Next</strong></a></li>
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