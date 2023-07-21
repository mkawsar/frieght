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
            <form class="form-horizontal" action="{{ route('product.store') }}" id="create-product-form" method="POST"
                  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Product Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif"
                                   value="{{ old('title') }}" name="title" id="title" placeholder="Product Title"
                                   data-parsley-required="true">
                            @if($errors->has('title'))
                                <span class="error invalid-feedback">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Product Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('price')) is-invalid @endif"
                                   name="price" id="price" placeholder="Product Price" data-parsley-required="true"
                                   data-parsley-pattern="/^[0-9]+?[\.0-9]*$/g" value="{{ old('price') }}">
                            @if($errors->has('price'))
                                <span class="error invalid-feedback">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="currency" class="col-sm-2 col-form-label">Currency Type</label>
                        <div class="col-sm-10">
                            <select name="currency" id="currency"
                                    class="form-control select2 @if($errors->has('currency')) is-invalid @endif"
                                    data-parsley-required="true"
                                    data-parsley-errors-container="#productCurrencyValidationErrorMessage">
                                <option value="">Select an Option</option>
                                @foreach($currencies as $item)
                                    <option value="{{ $item['code'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                            <div id="productCurrencyValidationErrorMessage"></div>
                            @if($errors->has('currency'))
                                <span class="error invalid-feedback">{{ $errors->first('currency') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Product Image</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" name="image" id="image" data-parsley-required="true"
                                       class="custom-file-input @if($errors->has('image')) is-invalid @endif">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @if($errors->has('image'))
                                <span class="error invalid-feedback">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="uom" class="col-sm-2 col-form-label">Product UOM</label>
                        <div class="col-sm-10">
                            <select name="uom" id="uom"
                                    class="form-control select2 @if($errors->has('uom')) is-invalid @endif"
                                    data-parsley-required="true"
                                    data-parsley-errors-container="#productUOMValidationErrorMessage">
                                <option value="">Select an Option</option>
                                @foreach($uomcodes as $item)
                                    <option value="{{ $item['code'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                            <div id="productUOMValidationErrorMessage"></div>
                            @if($errors->has('uom'))
                                <span class="error invalid-feedback">{{ $errors->first('uom') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="upc" class="col-sm-2 col-form-label">Product UPC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('upc')) is-invalid @endif"
                                   name="upc" id="upc" placeholder="Product UPC" data-parsley-required="true"
                                   value="{{ old('upc') }}">
                            @if($errors->has('upc'))
                                <span class="error invalid-feedback">{{ $errors->first('upc') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sku" class="col-sm-2 col-form-label">Product SKU</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('sku')) is-invalid @endif"
                                   name="sku" id="sku" placeholder="Product SKU" data-parsley-required="true"
                                   value="{{ old('sku') }}">
                            @if($errors->has('sku'))
                                <span class="error invalid-feedback">{{ $errors->first('sku') }}</span>
                            @endif
                        </div>
                    </div>
                    <hr class="bg-success border-2 border-top border-success">
                    <div class="form-group row">
                        <label for="length" class="col-sm-2 col-form-label">Length</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('length')) is-invalid @endif"
                                   name="length" id="length" placeholder="Product Length" data-parsley-required="true"
                                   data-parsley-pattern="/^[0-9]+?[\.0-9]*$/g" value="{{ old('length') }}">
                            @if($errors->has('length'))
                                <span class="error invalid-feedback">{{ $errors->first('length') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="width" class="col-sm-2 col-form-label">Width</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('width')) is-invalid @endif"
                                   name="width" id="width" placeholder="Product Width" data-parsley-required="true"
                                   data-parsley-pattern="/^[0-9]+?[\.0-9]*$/g" value="{{ old('width') }}">
                            @if($errors->has('width'))
                                <span class="error invalid-feedback">{{ $errors->first('width') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="height" class="col-sm-2 col-form-label">Height</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('height')) is-invalid @endif"
                                   name="height" id="height" placeholder="Product Height" data-parsley-required="true"
                                   data-parsley-pattern="/^[0-9]+?[\.0-9]*$/g" value="{{ old('height') }}">
                            @if($errors->has('height'))
                                <span class="error invalid-feedback">{{ $errors->first('height') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @if($errors->has('weight')) is-invalid @endif"
                                   name="weight" id="weight" placeholder="Product Weight" data-parsley-required="true"
                                   data-parsley-pattern="/^[0-9]+?[\.0-9]*$/g" value="{{ old('weight') }}">
                            @if($errors->has('weight'))
                                <span class="error invalid-feedback">{{ $errors->first('weight') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="weight_unit" class="col-sm-2 col-form-label">Weight Unit</label>
                        <div class="col-sm-10">
                            <select name="weight_unit" id="weight_type"
                                    class="form-control @if($errors->has('weight_unit')) is-invalid @endif"
                                    data-parsley-required="true">
                                <option value="">Select an Option</option>
                                <option value="kg">KG</option>
                                <option value="lb">LB</option>
                            </select>
                            @if($errors->has('weight_unit'))
                                <span class="error invalid-feedback">{{ $errors->first('weight_unit') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Create</button>
                    <a href="{{ route('product.index') }}" class="btn btn-default float-right">Cancel</a>
                </div>
            </form>
        </div>
    </div><!-- /.container-fluid -->
@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#create-product-form').parsley();
            $('#currency').select2();
            $('#uom').select2();
        });
    </script>
@stop
