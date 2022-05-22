@extends('layouts.layout')

@section('title')
    <title>View Order</title>
@endsection

@section('content')
    <!-- contant -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 side-bar tMargin">
                <a href="/home" id="home-button" class="btn btn-primary">
                    <i class="bi bi-house-door-fill"></i> Home
                  </a>
                <form class="form-inline mt-3" type="get" action="{{ url('/stock/order/search')  }}">
                    <input class="form-control mb-3" type="search" name="searchQuery" placeholder="Search Orders" aria-label="Search">
                    <button class="btn btn-primary btn-outline-light float-end" type="submit">Search</button>
                </form>

                <div style="clear: both"></div>
                <hr>

                

            </div>
            <div class="col-sm-10 tMargin">   
                <!-- table -->
                <table class="table align-middle mb-1 bg-white table-hover" id="product-table">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col">Index</th>
                            <th scope="col" style="text-align: center">Supplier Name</th>
                            <th scope="col" style="text-align: center">Company Name</th>
                            <th scope="col" style="text-align: center">Product ID</th>
                            <th scope="col" style="text-align: center">Order Status</th>
                            <th scope="col" style="text-align: center">Date</th>
                            <th scope="col" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                @php
                $x = 0;
               @endphp 

                @foreach ($orders as $order)
                <tr>
                   <th scope="row">{{ ++$x }}</th>
                    <td>{{ $order->supplierName }}</td>
                    <td>{{ $order->companyName }}</td>
                    <td>{{ $order->productID }}</td>
                    <td>{{ $order->orderStatus }}</td>
                    <td>{{ $order->dates }}</td>
                    <td>
                        <a href={{ "/stock/order/edit/".$order->id }} type="button" class="w3-button update-btn">Update</a>
                        <a href={{ "/stock/order/delete/".$order->id }} type="button" onclick="deleteAlert()" class="w3-button delete-btn">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection