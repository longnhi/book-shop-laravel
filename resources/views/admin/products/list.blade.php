@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <!-- Small table -->
                <div class="col-md-12 my-4">
                    <h2 class="h4 mb-1">List Book</h2>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="toolbar">
                            </div>
                            <!-- table -->
                            <table class="table table-borderless table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($books as $key=>$book)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-muted">{{ $book->id }}</p>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-md">
                                                <img src="{{asset( $book->image )}}" alt="..."
                                                    class="avatar-img">
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $book->name }}</strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $book->price }} $</strong></p>
                                        </td>
                                        <td class="text-muted"><strong>{{ $book->quantity }}</strong></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{URL::TO('/admin/products/detail/'. $book->id )}}">Show</a>
                                                <a class="dropdown-item" href="{{URL::TO('/admin/products/edit/'. $book->id )}}">Edit</a>
                                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                    document.getElementById('detroy-form-{{$book->id}}').submit();">Remove</a>
                                                <form id="detroy-form-{{$book->id}}" action="{{URL::TO('/admin/products/detroy/'. $book->id )}}" method="POST" style="display: none;">
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

                                    @if($books->currentPage() == 1)
                                        <li class="page-item disabled"><a class="page-link"
                                                href="{{ $books->previousPageUrl() }}"><strong>Previous</strong></a>
                                        </li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                                href="{{ $books->previousPageUrl() }}"><strong>Previous</strong></a>
                                        </li>
                                    @endif

                                    @for($i=1; $i<=$books->lastPage();$i++)
                                        @if($i==$books->currentPage())
                                            <li class="page-item active"><a class="page-link"
                                                href="#"><strong>{{ $books->currentPage() }}</strong></a></li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                href="{{$books->url($i)}}"><strong>{{ $i }}</strong></a></li>
                                        @endif
                                    @endfor

                                    @if($books->currentPage() == $books->lastPage())
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $books->nextPageUrl() }}"><strong>Next</strong></a></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $books->nextPageUrl() }}"><strong>Next</strong></a></li>
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