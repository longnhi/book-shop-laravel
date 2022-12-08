@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <!-- Small table -->
                <div class="col-md-12 my-4">
                    <h2 class="h4 mb-1">Publisher</h2>
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
                                        <th>Create Date</th>
                                        <th>Update Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($publishers as $key => $publisher)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $publisher->id }}</strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $publisher->name }}</strong></p>
                                        </td>
                                        <td class="text-muted"><strong>{{ $publisher->created_at }}</strong></td>
                                        <td class="text-muted"><strong>{{ $publisher->updated_at }}</strong></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only"><strong>Action</strong></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{URL::TO('/admin/publishers/edit/'.$publisher->id )}}">Edit</a>
                                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                    document.getElementById('detroy-form-{{$publisher->id}}').submit();">Remove</a>
                                                <form id="detroy-form-{{$publisher->id}}" action="{{URL::TO('/admin/publishers/detroy/'. $publisher->id )}}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <nav aria-label="Table Paging" class="mb-0 text-muted">
                                <ul class="pagination justify-content-center mb-0">

                                    @if($publishers->currentPage() == 1)
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $publishers->previousPageUrl() }}"><strong>Previous</strong></a>
                                        </li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $publishers->previousPageUrl() }}"><strong>Previous</strong></a>
                                        </li>
                                    @endif

                                    @for($i=1; $i<=$publishers->lastPage();$i++)
                                        @if($i==$publishers->currentPage())
                                            <li class="page-item active"><a class="page-link"
                                                href="#"><strong>{{ $publishers->currentPage() }}</strong></a></li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                href="{{$publishers->url($i)}}"><strong>{{ $i }}</strong></a></li>
                                        @endif
                                    @endfor

                                    @if($publishers->currentPage() == $publishers->lastPage())
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $publishers->nextPageUrl() }}"><strong>Next</strong></a></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $publishers->nextPageUrl() }}"><strong>Next</strong></a></li>
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