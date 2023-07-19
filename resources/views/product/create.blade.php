@extends('layouts.main')
@section('breadcrumb')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create New Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product List</a></li>
                    <li class="breadcrumb-item active">Create New Product</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop

@section('content')
    <div class="container-fluid">
        <div class="card card-default color-palette-box">
            <form class="form-horizontal" id="create-product-form">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Product Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif"
                                   name="title" id="title" placeholder="Product Title" data-parsley-required="true">
                            @if($errors->has('title'))
                                <span class="error invalid-feedback">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Product Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('price')) is-invalid @endif"
                                   name="price" id="price" placeholder="Product Price" data-parsley-required="true">
                            @if($errors->has('price'))
                                <span class="error invalid-feedback">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Product Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('price')) is-invalid @endif"
                                   name="price" id="price" placeholder="Product Price" data-parsley-required="true">
                            @if($errors->has('price'))
                                <span class="error invalid-feedback">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
            </form>
        </div>
    </div><!-- /.container-fluid -->
@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#create-product-form').parsley();
        });
    </script>
@stop
