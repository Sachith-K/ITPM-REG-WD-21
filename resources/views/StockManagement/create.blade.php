@extends('layouts.layout')

@section('title')
    <title>Insert Product</title>
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
                <form action="/stock/store" method="POST">
                    @csrf
                    <!-- Company Name -->
                    <div class="row mb-3 mt-3">
                        <label for="companyName" class="col-sm-2 col-form-label">Company Name <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="companyName" name="companyName" placeholder="" required>
                        </div>
                    </div>
                    <!-- Supplier Name -->
                    <div class="row mb-3">
                        <label for="supplierName" class="col-sm-2 col-form-label">Supplier Name <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="supplierName" name="supplierName"
                                placeholder="" required>
                        </div>
                    </div>
                    <!-- Product ID -->
                    <div class="row mb-3">
                        <label for="productId" class="col-sm-2 col-form-label">Product ID <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="productID" name="productID" placeholder="" required>
                        </div>
                    </div>
                    <!-- Product Name -->
                    <div class="row mb-3">
                        <label for="productName" class="col-sm-2 col-form-label">Product Name <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="productName" name="productName" placeholder="" required>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <!-- Quantity and Price per unit -->
                    <div class="row mb-3">
                        <label for="quantity" class="col-sm-2 col-form-label">Quantity <span class="reqField">(*)</span></label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="" required>
                        </div>
                        <label for="pricePerUnit" class="col-sm-2 col-form-label">Price per unit <span class="reqField">(*)</span></label>
                        <div class="col-sm-4">
                            <input type="number" step="0.01" class="form-control" id="pricePerUnit" name="pricePerUnit"
                                placeholder="" required>
                        </div>
                    </div>
                    {{-- Order Status --}}
                    <div class="row mb-3">
                        <label for="productName" class="col-sm-2 col-form-label">Order Status</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="orderStatus" id="pending" value="pending">
                                <label class="form-check-label" for="pending">Pending</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="orderStatus" id="completed" value="completed">
                                <label class="form-check-label" for="completed">Completed</label>
                            </div>
                        </div>
                    </div>
                    <!-- Date -->
                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Date <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date" placeholder="" required>
                        </div>
                    </div>
                    {{-- Required indicator --}}
                    <div class="row mb-3">
                        <span class="reqField">(*) is Required</span>
                    </div>
                    <!-- submit button -->
                    <button type="submit" class="btn btn-primary mb-3 float-end">Submit</button>
                </form>
            </div>

        </div>
    </div>
@endsection