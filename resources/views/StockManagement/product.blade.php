@extends('layouts.layout')

@section('title')
    <title>View Product</title>
@endsection

@section('content')
    <!-- contant -->

    <div class="container-fluid">
        <div class="row">
          <!-- side bar -->

          <div class="col-sm-2">
            <a href="/home" id="home-button" class="btn btn-primary">
                <i class="bi bi-house-door-fill"></i> Home
              </a>
            
              <form class="form-inline mt-3" type="get" action="{{ url('/stock/product/search')  }}">
                <input class="form-control mb-3" type="search" name="searchQuery" placeholder="Search Products" aria-label="Search">
                <button class="btn btn-primary btn-outline-light float-end" type="submit">Search</button>
            </form>

            <div style="clear: both"></div>
            <hr>
         
        </div>
        
    <div class="container-fluid tMargin col-sm-10 main-section">
    <div id="header-area-Order"><b>Product List</b></div>
        <!-- table -->
        <table class="table align-middle mb-1 bg-white table-hover" id="product-table">
            <thead class="bg-light">
                <tr>
                    <th scope="col"><u>Index</u></th>
                    <th scope="col" style="text-align:center"><u>Product ID</u></th>
                    <th scope="col" style="text-align:center"><u>Product Name</u></th>
                    <th scope="col" style="text-align:center"><u>Description</u></th>
                    <th scope="col" style="text-align:center"><u>Quantity</u></th>
                    <th scope="col" style="text-align:center"><u>Price Per Unit</u></th>
                    <th scope="col" style="text-align:center"><u>Total Amount</u></th>
                    <th scope="col" style="text-align:center"><u>Action</u></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $x = 0;
                @endphp 
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ ++$x }}</th>
                    <td>{{ $product->productID }}</td>
                    <td>{{ $product->productName }}</td>
                    <td>{{ $product->descriptions }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->pricePerUnit }}</td>
                    <td>{{ $totalAmount = $product->quantity * $product->pricePerUnit }}</td>
                    <td>
                        <a href={{ "/stock/product/edit/".$product->id }} type="button" class="w3-button update-btn">Update</a>
                        <a href={{ "/stock/product/delete/".$product->id."?pid=".$product->productID }} type="button" onclick="deleteAlert()" class="w3-button delete-btn">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection