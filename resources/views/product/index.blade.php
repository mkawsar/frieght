@extends('layouts.main')
@section('breadcrumb')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Product List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Product List</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop

@section('content')
    <div class="container-fluid">
        <div class="card card-default color-palette-box">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{ route('product.create') }}" class="btn btn-outline-success btn-lg">
                        <i class="fas fa-plus"></i> Create New Product
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Weight</th>
                            <th>Price</th>
                            <th>Shipper Address</th>
                            <th>Recipient Address</th>
                            <th>Total Base Charge</th>
                            <th>Total Net Charge</th>
                            <th>Total Sur. Charge</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $index => $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->weight . ' ' . strtoupper($item->weight_unit) }}</td>
                                <td>{{ $item->price . ' ' . $item->currency }}</td>
                                <td>
                                    {{ $item->rated == null ? '' : $item->rated->shipper_city . ', ' . $item->rated->shipper_state_code . ', ' . $item->rated->shipper_postal_code . ', ' . $item->rated->shipper_country }}
                                </td>
                                <td>
                                    {{ $item->rated == null ? '' : $item->rated->recipient_city . ', ' . $item->rated->recipient_state_code . ', ' . $item->rated->recipient_postal_code . ', ' . $item->rated->recipient_country }}
                                </td>
                                <td>{{ $item->rated == null ? '' : $item->rated->total_base_charge . ' ' . $item->rated->currency }}</td>
                                <td>{{ $item->rated == null ? '' : $item->rated->total_net_charge . ' ' . $item->rated->currency }}</td>
                                <td>{{ $item->rated == null ? '' : $item->rated->total_sur_charges . ' ' . $item->rated->currency }}</td>
                                <td>{{ $item->rated == null ? '' : $item->rated->product_quantity }}</td>
                                <td>

                                    <a href="{{ $item->rated != null ? 'javascript:void(0)' : route('product.freight.rate', $item->uuid) }}"><i class="fas fa-arrow-alt-circle-right"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->withQueryString()->links('vendors.pagination') }}
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@stop
