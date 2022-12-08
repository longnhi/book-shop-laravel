@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <!-- Small table -->
                <div class="col-md-12 my-4">
                    <h2 class="h4 mb-1">List Author</h2>

                    <div class="card shadow">
                        <div class="card-body">
                            <div class="toolbar">
                            </div>
                            <!-- table -->
                            <table class="table table-borderless table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th class="w-25">Information</th>
                                        <th>Create Date</th>
                                        <th>Update Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($authors as $key=>$author)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-muted">{{ $author->id }}</p>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-md">
                                                <img src="{{asset( $author->avatar )}}"
                                                    class="avatar-img">
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-muted"><strong> {{ $author->name }} </strong></p>
                                        </td>
                                        <td class="w-25">
                                            <strong class="text-justify"><p>{{ $author->information }}</p></strong>
                                        </td>
                                        <td class="text-muted"><strong>{{ $author->created_at }}</strong></td>
                                        <td class="text-muted"><strong>{{ $author->updated_at }}</strong></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{URL::TO('/admin/authors/edit/'. $author->id )}}">Edit</a>
                                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                    document.getElementById('detroy-form-{{$author->id}}').submit();">Remove</a>
                                                <form id="detroy-form-{{$author->id}}" action="{{URL::TO('/admin/authors/detroy/'. $author->id )}}" method="POST" style="display: none;">
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

                                    @if($authors->currentPage() == 1)
                                    <li class="page-item disabled"><a class="page-link"
                                            href="{{ $authors->previousPageUrl() }}"><strong>Previous</strong></a>
                                    </li>
                                    @else
                                    <li class="page-item"><a class="page-link"
                                            href="{{ $authors->previousPageUrl() }}"><strong>Previous</strong></a>
                                    </li>
                                    @endif

                                    @for($i=1; $i<=$authors->lastPage();$i++)
                                        @if($i==$authors->currentPage())
                                            <li class="page-item active"><a class="page-link"
                                                href="#"><strong>{{ $authors->currentPage() }}</strong></a></li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                href="{{$authors->url($i)}}"><strong>{{ $i }}</strong></a></li>
                                        @endif
                                    @endfor

                                    @if($authors->currentPage() == $authors->lastPage())
                                        <li class="page-item disabled"><a class="page-link"
                                            href="{{ $authors->nextPageUrl() }}"><strong>Next</strong></a></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                            href="{{ $authors->nextPageUrl() }}"><strong>Next</strong></a></li>
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