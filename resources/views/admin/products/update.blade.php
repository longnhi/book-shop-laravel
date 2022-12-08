@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Edit Book</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="text-center avatar-xl">
                        <img src="{{asset( $book->image )}}" alt="..." class="avatar-img"
                            id="image_preview">
                    </div>
                </div>
                <div class="card-body">
                    <form class="needs-validation" enctype="multipart/form-data" method="post" action="{{URL::TO('/admin/products/update/'. $book->id )}}" >
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $book->price }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $book->quantity }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="category">Category</label>
                                <select class="custom-select" id="category" name="id_category" required>
                                    <option selected disabled value="">Choose Category</option>
                                    @foreach($categorys as $key=>$category)
                                        @if($category->id==$book->id_category)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="publisher">Publisher</label>
                                <select class="custom-select" id="publisher" name="id_publisher" required>
                                    <option selected disabled value="">Choose Publisher</option>
                                    @foreach($publishers as $key=>$publisher)
                                        @if($publisher->id==$book->id_publisher)
                                            <option value="{{ $publisher->id }}" selected>{{ $publisher->name }}</option>
                                        @else
                                            <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="author">Author</label>
                                <select class="custom-select" id="author" name="id_author" required>
                                    <option selected disabled value="">Choose Author</option>
                                    @foreach($authors as $key=>$author)
                                        @if($author->id==$book->id_author)
                                            <option value="{{ $author->id }}" selected>{{ $author->name }}</option>
                                        @else
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="information">Information</label>
                            <textarea class="form-control" id="information" name="information"
                                placeholder="Required example textarea" rows="8" required>{{ $book->information }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Image">New Image</label>
                            <div class="card shadow">
                                <div class="card-body">
                                    <input type="file" id="Image" name="image" class="form-control-file" onchange="loadImageBook(event)">
                                </div>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div> <!-- /.card-body -->
            </div> <!-- /.card -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
<script>
    var loadImageBook = function(event) {
        var output = document.getElementById('image_preview');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@endsection