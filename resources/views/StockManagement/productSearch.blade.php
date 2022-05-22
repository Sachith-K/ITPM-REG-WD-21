@extends('layouts.layout')

@section('title')
    <title>View Product</title>
@endsection

@section('content')
    <!-- contant -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 side-bar tMargin">
                <div>
                    <a href="/product" id="product-list" class="btn btn-primary m-3">Product List</a>
                </div>
                <form class="form-inline mt-3" type="get" action="{{ url('/stock/product/search')  }}">
                    <input class="form-control mr-sm-2 mb-3" type="search" name="searchQuery" placeholder="Search Products" aria-label="Search">
                    <button class="btn btn-primary btn-outline-light my-2 my-sm-0 float-end" type="submit">Search</button>
                </form>
                <div style="clear: both"></div>
                <hr>
            </div>
            <div class="col-sm-9 tMargin">
                {{-- @php
                    $products = [];
                @endphp --}}
                <!-- table -->
                <table class="table table-striped text-center" id="product-table">
                    <thead>
                        <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price Per Unit</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($searchProducts as $searchProducts)
                        <tr>
                            <th scope="row">{{ $searchProducts->id }}</th>
                            <td>{{ $searchProducts->productID }}</td>
                            <td>{{ $searchProducts->productName }}</td>
                            <td>{{ $searchProducts->descriptions }}</td>
                            <td>{{ $searchProducts->quantity }}</td>
                            <td>{{ $searchProducts->pricePerUnit }}</td>
                            <td>{{ $totalAmount = $searchProducts->quantity * $searchProducts->pricePerUnit }}</td>
                            <td>
                                <a href={{ "/stock/product/edit/".$searchProducts->id }} type="button" class="btn btn-primary alink">Update</a>
                                <a href={{ "/stock/product/delete/".$searchProducts->id."?pid=".$searchProducts->productID }} type="button" onclick="deleteAlert()" class="btn btn-primary alink">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection