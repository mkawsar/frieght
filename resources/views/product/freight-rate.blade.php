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
            <form class="form-horizontal" action="{{ route('product.store.freight.rate') }}"
                  id="freight-rate-product-form" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="uuid" value="{{ $product->uuid }}">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="shipper_account_no">Shipper Account Number</label>
                                <input type="text"
                                       class="form-control @if($errors->has('shipper_account_no')) is-invalid @endif"
                                       value="{{ old('shipper_account_no') }}" id="shipper_account_no"
                                       name="shipper_account_no"
                                       placeholder="Enter an Shipper Account Number" data-parsley-required="true">
                                @if($errors->has('shipper_account_no'))
                                    <span
                                        class="error invalid-feedback">{{ $errors->first('shipper_account_no') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="recipient_account_no">Recipient Account Number</label>
                            <input type="text"
                                   class="form-control @if($errors->has('recipient_account_no')) is-invalid @endif"
                                   value="{{ old('account_no') }}" id="recipient_account_no" name="recipient_account_no"
                                   placeholder="Enter an Recipient Account Number" data-parsley-required="true">
                            @if($errors->has('recipient_account_no'))
                                <span class="error invalid-feedback">{{ $errors->first('recipient_account_no') }}</span>
                            @endif
                        </div>
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
                                <label for="shipper_postal_code">Shipper Postal Code</label>
                                <input type="text" name="shipper_postal_code" id="shipper_postal_code"
                                       value="{{ old('shipper_postal_code') }}"
                                       class="form-control @if($errors->has('shipper_postal_code')) is-invalid @endif"
                                       placeholder="Shipper postal Code" data-parsley-required="true">
                                @if($errors->has('shipper_postal_code'))
                                    <span
                                        class="error invalid-feedback">{{ $errors->first('shipper_postal_code') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="recipient_postal_code">Recipient Postal Code</label>
                                <input type="text" name="recipient_postal_code" id="recipient_postal_code"
                                       value="{{ old('recipient_postal_code') }}"
                                       class="form-control @if($errors->has('recipient_postal_code')) is-invalid @endif"
                                       placeholder="Recipient Postal Code" data-parsley-required="true">
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
                                <label for="shipper_state_code">Shipper State or Province Code</label>
                                <input type="text" name="shipper_state_code" id="shipper_state_code"
                                       value="{{ old('shipper_state_code') }}" data-parsley-maxlength="2"
                                       class="form-control @if($errors->has('shipper_state_code')) is-invalid @endif"
                                       placeholder="Shipper State or Province Code" data-parsley-required="true">
                                <small class="text-muted">Ex. AR etc</small>
                                @if($errors->has('shipper_state_code'))
                                    <span
                                        class="error invalid-feedback">{{ $errors->first('shipper_state_code') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="recipient_state_code">Recipient State or Province Code</label>
                                <input type="text" name="recipient_state_code" id="recipient_state_code"
                                       value="{{ old('recipient_state_code') }}" data-parsley-maxlength="2"
                                       class="form-control @if($errors->has('recipient_state_code')) is-invalid @endif"
                                       placeholder="Shipper State or Province Code" data-parsley-required="true">
                                <small class="text-muted">Ex. AR etc</small>
                                @if($errors->has('recipient_state_code'))
                                    <span
                                        class="error invalid-feedback">{{ $errors->first('recipient_state_code') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="shipper_city">Shipper City</label>
                                <input type="text" name="shipper_city" id="shipper_city"
                                       value="{{ old('shipper_city') }}"
                                       class="form-control @if($errors->has('shipper_city')) is-invalid @endif"
                                       placeholder="Shipper City" data-parsley-required="true">
                                @if($errors->has('shipper_city'))
                                    <span class="error invalid-feedback">{{ $errors->first('shipper_city') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="recipient_city">Recipient City</label>
                                <input type="text" name="recipient_city" id="recipient_city"
                                       value="{{ old('recipient_city') }}"
                                       class="form-control @if($errors->has('recipient_city')) is-invalid @endif"
                                       placeholder="Recipient City" data-parsley-required="true">
                                @if($errors->has('recipient_city'))
                                    <span class="error invalid-feedback">{{ $errors->first('recipient_city') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="street_line">Recipient Street Lines</label>
                                <input type="text" name="street_line" id="street_line"
                                       value="{{ old('street_line') }}"
                                       class="form-control @if($errors->has('street_line')) is-invalid @endif"
                                       placeholder="Street Lines" data-parsley-required="true">
                                @if($errors->has('street_line'))
                                    <span class="error invalid-feedback">{{ $errors->first('street_line') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="item_id">Item ID</label>
                                <input type="text" name="item_id" id="item_id"
                                       value="{{ old('item_id') }}"
                                       class="form-control @if($errors->has('item_id')) is-invalid @endif"
                                       placeholder="Recipient City" data-parsley-required="true">
                                <small class="text-muted">Ex. Books etc</small>
                                @if($errors->has('item_id'))
                                    <span class="error invalid-feedback">{{ $errors->first('item_id') }}</span>
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
                                    <option
                                        value="{{ $item['code'] }}">{{ $item['type'] . ' (' . $item['weight'] .' / ' . $item['code'] .')' }}</option>
                                @endforeach
                            </select>
                            <div id="freightClassValidationErrorMessage"></div>
                            @if($errors->has('freight_class'))
                                <span class="error invalid-feedback">{{ $errors->first('freight_class') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="from-group row">
                        <label for="product_quantity" class="col-sm-2 col-form-label">Product Quantity</label>
                        <input type="text" id="product_quantity" name="product_quantity"
                               class="form-control @if($errors->has('product_quantity')) is-invalid @endif"
                               placeholder="Quantity" data-parsley-required="true" data-parsley-type="digits">
                        @if($errors->has('product_quantity'))
                            <span class="error invalid-feedback">{{ $errors->first('product_quantity') }}</span>
                        @endif
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
