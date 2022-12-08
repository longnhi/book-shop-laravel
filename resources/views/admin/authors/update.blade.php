@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Edit Author</h2>

            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Author</strong>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{URL::TO('/admin/authors/update/'. $author->id )}}">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="row mt-5 align-items-center">
                            <div class="col-md-3 text-center mb-5">
                                <div class="avatar avatar-xl">
                                    <img src="{{asset( $author->avatar )}}" alt="..." class="avatar-img" id="avatar_preview">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4 class="mb-1" id="name_preview">{{ $author->name }}</h4>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <p class="text-muted" id="information_preview">{{ $author->information }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-group">
                            <label for="firstname">Fullname</label>
                            <input type="text" id="name" class="form-control" required name="name" placeholder="Họ tên tác giả" value="{{ $author->name }}" onchange="loadNameAuthor(event)">
                        </div>
                        <div class="form-group mb-3">
                            <label for="customFile">Choose avatar new</label>
                            <input type="file" id="example-fileinput" class="form-control-file" name="avatar"
                                onchange="loadFileAuthor(event)">
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5 class="card-title">Author information</h5>
                                        <textarea required class="form-control" id="example-textarea" name="information"
                                            rows="4" onchange="loadInfoAuthor(event)" >{{ $author->information }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end section -->
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div> <!-- /.card-body -->
            </div> <!-- /.card -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
<script>
    var loadFileAuthor = function(event) {
        var output = document.getElementById('avatar_preview');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    var loadNameAuthor = function(event) {
        document.getElementById("name_preview").innerHTML = event.target.value;
    };
    var loadInfoAuthor = function(event) {
        var output = document.getElementById('information_preview');
        document.getElementById("information_preview").innerHTML = event.target.value;
    };
</script>
@endsection