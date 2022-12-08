@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Add Publisher</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Publisher</strong>
                </div>
                <div class="card-body">
                    <form class="needs-validation" method="POST" action="{{URL::TO('/admin/publishers/store') }}">
                        {{csrf_field()}}
                        <div class="form">
                            <div class="mb-3">
                                <label for="validationCustom3">Publisher name</label>
                                <input type="text" class="form-control" name="name" required>
                                <div class="valid-feedback"></div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                    </form>
                </div> <!-- /.card-body -->
            </div>
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection