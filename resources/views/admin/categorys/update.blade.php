@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Edit Category</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Category</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="{{URL::TO('/admin/categorys/update/'.$category->id) }}" class="needs-validation" >
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form">
                            <div class="mb-3">
                                <label for="validationCustom3">ID</label>
                                <input type="text" class="form-control" value="{{$category->id}}" name="id" disabled required>
                                <div class="valid-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom3">Category name</label>
                                <input type="text" class="form-control" name="name" value="{{$category->name}}" required>
                                <div class="valid-feedback"></div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Sửa</button>
                        </div>
                    </form>
                </div> <!-- /.card-body -->
            </div>
        </div>
    </div>
</div> <!-- .container-fluid -->
@endsection