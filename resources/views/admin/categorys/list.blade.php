@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <!-- Small table -->
                <div class="col-md-12 my-4">
                    <h2 class="h4 mb-1">List Category</h2>
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
                                    @foreach($categorys as $key => $category)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $category->id }}</strong></p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong>{{ $category->name }}</strong></p>
                                        </td>
                                        <td class="text-muted"><strong>{{ $category->created_at }}</strong></td>
                                        <td class="text-muted"><strong>{{ $category->updated_at }}</strong></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only"><strong>Action</strong></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{URL::TO('/admin/categorys/edit/'.$category->id )}}">Edit</a>
                                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                    document.getElementById('detroy-form-{{$category->id}}').submit();">Remove</a>
                                                <form id="detroy-form-{{$category->id}}" action="{{URL::TO('/admin/categorys/detroy/'. $category->id )}}" method="POST" style="display: none;">
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

                                    @if($categorys->currentPage() == 1)
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $categorys->previousPageUrl() }}"><strong>Previous</strong></a></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $categorys->previousPageUrl() }}"><strong>Previous</strong></a></li>
                                    @endif

                                    @for($i=1; $i<=$categorys->lastPage();$i++)
                                        @if($i==$categorys->currentPage())
                                            <li class="page-item active"><a class="page-link"
                                                href="#"><strong>{{ $categorys->currentPage() }}</strong></a></li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                href="{{$categorys->url($i)}}"><strong>{{ $i }}</strong></a></li>
                                        @endif
                                    @endfor

                                    @if($categorys->currentPage() == $categorys->lastPage())
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $categorys->nextPageUrl() }}"><strong>Next</strong></a></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $categorys->nextPageUrl() }}"><strong>Next</strong></a></li>
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