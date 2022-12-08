@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Book Detail</h2>
            <div class="card">

                <div class="card-header">
                    <div class="text-center p-3">
                        <h5>{{ $book->name }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-center p-3">
                            <img src="{{asset ($book->image) }}" alt="..." class="avatar-img w-100" id="image_preview">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="p-3">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" disabled value="{{ $book->price }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" disabled value="{{ $book->quantity }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="category">Category</label>
                                    <input type="text" class="form-control" disabled
                                        value="{{ $book->category->name }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="publisher">Publisher</label>
                                    <input type="text" class="form-control" disabled
                                        value="{{ $book->publisher->name }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="author">Author</label>
                                    <input type="text" class="form-control" disabled value="{{ $book->author->name }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="information">Information</label>
                                <textarea class="form-control" rows="8" disabled>{{ $book->information }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection