@extends('layouts.layout')

@section('title')
    <title>Update Product</title>
@endsection

@section('content')
    <!-- content -->
    <div class="container-fluid">
        <!-- side bar -->
        <div class="row">
            <div class="col-sm-2 side-bar">
            <a href="/home" id="home-button" class="btn btn-primary">
              <i class="bi bi-house-door-fill"></i> Home
            </a>
            </div>

            <!-- web form -->
            <div class="col-sm-10 main-section">
                <!-- form -->
                <form action="/stock/product/edit/" method="POST">
                    @csrf
                    <!-- Product ID -->
                    <div class="row mb-3 mt-3">
                        <label for="productId" class="col-sm-2 col-form-label">Product ID <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="productID" name="productID" value="{{ $product->productID }}" required disabled>
                        </div>
                    </div>
                    <!-- Product Name -->
                    <div class="row mb-3">
                        <label for="productName" class="col-sm-2 col-form-label">Product Name <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="productName" name="productName" value="{{ $product->productName }}" required>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $product->descriptions }}</textarea>
                        </div>
                    </div>
                    <!-- Quantity and Price per unit -->
                    <div class="row mb-3">
                        <label for="quantity" class="col-sm-2 col-form-label">Quantity <span class="reqField">(*)</span></label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
                        </div>
                        <label for="pricePerUnit" class="col-sm-2 col-form-label">Price per unit <span class="reqField">(*)</span></label>
                        <div class="col-sm-4">
                            <input type="number" step="0.01" class="form-control" id="pricePerUnit" name="pricePerUnit"
                            value="{{ $product->pricePerUnit }}" required>
                        </div>
                    </div>
                    {{-- Required indicator --}}
                    <div class="row mb-3">
                        <span class="reqField">(*) is Required</span>
                    </div>
                    <!-- submit button -->
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <button type="submit" class="btn btn-primary mb-3 float-end">Submit</button>
                </form>
            </div>

        </div>
    </div>
@endsection