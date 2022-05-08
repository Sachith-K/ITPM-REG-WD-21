@extends('layouts.layout')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <!-- contant -->
    <div class="container-fluid">
        <div class="row">
          <!-- side bar -->
          <div class="col-sm-3 side-bar">
            <a href="/home" id="home-button" class="btn btn-primary" style="font-size: 18px">
              Stock Management 
            </a>
          </div>
          <div class="col-sm-9 main-section">
            <div id="header-area"><b> <h1>STOCK MANAGEMENT</h1></b></div>
            <div class="button-area" style="text-align: center">
              <img src="img/view2.png" class="button-image" alt="" />
              <a href="/stock/product" class="btn btn-primary main-button">View Product</a>
            </div>
            <div class="button-area" style="text-align: center">
              <img src="img/insert2.png" class="button-image" alt="" />
              <a href="/stock/create" type="button" class="btn btn-primary main-button">Insert Product</a
              >
            </div>
            <div class="button-area" style="text-align: center">
                <img src="img/view2.png" class="button-image" alt="" />
                <a href="/stock/order" class="btn btn-primary main-button">View Order</a>
            </div>
          </div>
        </div>
    </div>
@endsection