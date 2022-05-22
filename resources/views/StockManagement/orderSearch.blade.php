@extends('layouts.layout')

@section('title')
    <title>View Order</title>
@endsection

@section('content')
    <!-- contant -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 side-bar tMargin">
                <div>
                    <a href="/stock/order/pdf" class="btn btn-primary m-3">Order List</a>
                   
                </div>
                <form class="form-inline mt-3" type="get" action="{{ url('/stock/order/search')  }}">
                    <input class="form-control mb-3" type="search" name="searchQuery" placeholder="Search Orders" aria-label="Search">
                    <button class="btn btn-primary btn-outline-light float-end" type="submit">Search</button>
                </form>

                <div style="clear: both"></div>
                <hr>

            </div>
            <div class="col-sm-9 tMargin">   
                <!-- table -->
                <table class="table table-striped text-center" id="product-table">
                    <thead>
                        <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Supplier Name</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Order Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $x = 0;
                        @endphp 
                        @foreach ($searchOrders as $searchOrders)
                        <tr>
                            <th scope="row">{{ ++$x }}</th>
                            <td>{{ $searchOrders->supplierName }}</td>
                            <td>{{ $searchOrders->companyName }}</td>
                            <td>{{ $searchOrders->productID }}</td>
                            <td>{{ $searchOrders->orderStatus }}</td>
                            <td>{{ $searchOrders->dates }}</td>
                            <td>
                                <a href={{ "/stock/order/edit/".$searchOrders->id }} type="button" class="btn btn-primary">Update</a>
                                <a href={{ "/stock/order/delete/".$searchOrders->id }} type="button" onclick="deleteAlert()" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection