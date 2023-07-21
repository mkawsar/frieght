@extends('layouts.main')
@section('breadcrumb')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Product Freight Rate</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product List</a></li>
                    <li class="breadcrumb-item active">Product Freight Rate</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p class="lead">Product Data</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th style="width:50%">Title</th>
                                    <td>{{ $product->title }}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ $product->price . ' ' . $product->currency }}</td>
                                </tr>
                                <tr>
                                    <th>UOM</th>
                                    <td>{{ $product->uom }}</td>
                                </tr>
                                <tr>
                                    <th>UPC</th>
                                    <td>{{ $product->upc }}</td>
                                </tr>
                                <tr>
                                    <th>SKU</th>
                                    <td>{{ $product->sku }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="lead">Freight Data</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th style="width:50%">Length</th>
                                    <td>{{ $product->length }}</td>
                                </tr>
                                <tr>
                                    <th>Width</th>
                                    <td>{{ $product->width }}</td>
                                </tr>
                                <tr>
                                    <th>Height</th>
                                    <td>{{ $product->height }}</td>
                                </tr>
                                <tr>
                                    <th>Weight Unit</th>
                                    <td>{{ strtoupper($product->weight_unit) }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ ucfirst($product->status) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Get Product Freight Rate</h3>
            </div>
            <form class="form-horizontal" action="#" id="freight-rate-product-form" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="uuid" value="{{ $product->uuid }}">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="account_no">Shipping Account Number</label>
                        <input type="text"
                               class="form-control @if($errors->has('account_no')) is-invalid @endif"
                               value="{{ old('account_no') }}" id="account_no" name="account_no"
                               placeholder="Enter an Shipping Account Number" data-parsley-required="true">
                        @if($errors->has('account_no'))
                            <span class="error invalid-feedback">{{ $errors->first('account_no') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="shipper_country">Shipper Country</label>
                                <select name="shipper_country" id="shipper_country"
                                        class="form-control select2 @if($errors->has('shipper_country')) is-invalid @endif"
                                        data-parsley-required="true"
                                        data-parsley-errors-container="#shipperCountryCodeValidationErrorMessage">
                                    <option value="">Select an Option</option>
                                    @foreach($countries as $item)
                                        <option value="{{ $item['code'] }}">{{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                                <div id="shipperCountryCodeValidationErrorMessage"></div>
                                @if($errors->has('shipper_country'))
                                    <span class="error invalid-feedback">{{ $errors->first('shipper_country') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="recipient_country">Recipient Country</label>
                                <select name="recipient_country" id="recipient_country"
                                        class="form-control select2 @if($errors->has('recipient_country')) is-invalid @endif"
                                        data-parsley-required="true"
                                        data-parsley-errors-container="#recipientCountryCodeValidationErrorMessage">
                                    <option value="">Select an Option</option>
                                    @foreach($countries as $item)
                                        <option value="{{ $item['code'] }}">{{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                                <div id="recipientCountryCodeValidationErrorMessage"></div>
                                @if($errors->has('recipient_country'))
                                    <span
                                        class="error invalid-feedback">{{ $errors->first('recipient_country') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="shipper_zip_code">Shipper Zip Code</label>
                                <input type="text" name="shipper_zip_code" id="shipper_zip_code"
                                       value="{{ old('shipper_zip_code') }}"
                                       class="form-control @if($errors->has('shipper_zip_code')) is-invalid @endif"
                                       placeholder="Shipper Zip Code" data-parsley-required="true">
                                @if($errors->has('shipper_country'))
                                    <span class="error invalid-feedback">{{ $errors->first('shipper_country') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="recipient_zip_code">Recipient Zip Code</label>
                                <input type="text" name="recipient_zip_code" id="recipient_zip_code"
                                       value="{{ old('recipient_zip_code') }}"
                                       class="form-control @if($errors->has('recipient_zip_code')) is-invalid @endif"
                                       placeholder="Recipient Zip Code" data-parsley-required="true">
                                @if($errors->has('recipient_country'))
                                    <span class="error invalid-feedback">{{ $errors->first('recipient_country') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="package_type">Package Type</label>
                            <select name="package_type" id="package_type"
                                    class="form-control select2 @if($errors->has('package_type')) is-invalid @endif"
                                    data-parsley-required="true"
                                    data-parsley-errors-container="#packageTypeValidationErrorMessage">
                                <option value="">Select an Option</option>
                                @foreach($packages as $item)
                                    <option value="{{ $item['code'] }}">{{ $item['code'] }}</option>
                                @endforeach
                            </select>
                            <div id="packageTypeValidationErrorMessage"></div>
                            @if($errors->has('package_type'))
                                <span class="error invalid-feedback">{{ $errors->first('package_type') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label for="freight_class">Freight Class</label>
                            <select name="freight_class" id="freight_class"
                                    class="form-control select2 @if($errors->has('freight_class')) is-invalid @endif"
                                    data-parsley-required="true"
                                    data-parsley-errors-container="#freightClassValidationErrorMessage">
                                <option value="">Select an Option</option>
                                @foreach($freights as $item)
                                    <option value="{{ $item['code'] }}">{{ $item['type'] . ' (' . $item['weight'] .')' }}</option>
                                @endforeach
                            </select>
                            <div id="freightClassValidationErrorMessage"></div>
                            @if($errors->has('freight_class'))
                                <span class="error invalid-feedback">{{ $errors->first('freight_class') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Get Freight Rate</button>
                    <a href="{{ route('product.index') }}" class="btn btn-default float-right">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#freight-rate-product-form').parsley();
            $('#shipper_country').select2();
            $('#recipient_country').select2();
            $('#package_type').select2();
            $('#freight_class').select2();
        });
    </script>
@stop
