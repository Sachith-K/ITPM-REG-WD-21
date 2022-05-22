<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Order;
use Carbon\Carbon;
use DB;
use PDF;

class StockController extends Controller
{
    // show form - insert product
    public function create() {
        return view('StockManagement.create');
    }

    //view product list
    public function product(){
        return view('StockManagement.product');
    }

    // save stock details
    public function store() {

        $stock = new Stock();
        $order = new Order();

        $stock->productID = request('productID');
        $stock->productName = request('productName');
        $stock->descriptions = request('description');
        $stock->quantity = request('quantity');
        $stock->pricePerUnit = request('pricePerUnit');


        $order->supplierName = request('supplierName');
        $order->companyName = request('companyName');       
        $order->productID = request('productID');
        $order->orderStatus = request('orderStatus');
        $order->dates = request('date');

        $stock->save();
        $order->save();

        return redirect('/home');
    }

    // display product details
    public function showProduct() {

        $products = Stock::all();

        return view('StockManagement.product', [
            'products' => $products
        ]);

    }

    // display product details for update
    public function indexProduct($id) {
        
        $products = Stock::find($id);
        return view('StockManagement.editProduct', ['product' => $products]);

    }

    // update product details
    public function editProduct(Request $req) {

        // $productID = $req->input('productID');
        // $productName = $req->input('productName');
        // $descriptions = $req->input('description');
        // $quantity = $req->input('quantity');
        // $pricePerUnit = $req->input('pricePerUnit');
        // error_log($productID);

        // DB::update('
        //     update stocks set productName = ?, descriptions=?, quantity=?, pricePerUnit=? where productID=?', 
        //     [$productName, $descriptions, $quantity, $pricePerUnit, $productID]
        // );

        $updatedProduct = Stock::find($req->id);

        //$updatedProduct->productID = request('productID');
        $updatedProduct->productName = request('productName');
        $updatedProduct->descriptions = request('description');
        $updatedProduct->quantity = request('quantity');
        $updatedProduct->pricePerUnit = request('pricePerUnit');

        $updatedProduct->save();

        return redirect('/stock/product');

    }

    // delete product
    public function deleteProduct($id) {

        $product = Stock::find($id);
        $product->delete();
        
        // $pid = request('pid');
        // DB::delete('delete from orders where productID = ?', [$pid]);

        return redirect('/stock/product');

    }

    // show order details
    public function showOrder() {

        $orders = Order::all();

        return view('StockManagement.order', [
            'orders' => $orders
        ]);

    }

    // display order details for update
    public function indexOrder($id) {

        $order = Order::find($id);
        return view('StockManagement.editOrder', ['order' => $order]);

    }

    // update order details
    public function editOrder(Request $req) {

        $updatedOder = Order::find($req->id);

        $updatedOder->supplierName = request('supplierName');
        $updatedOder->companyName = request('companyName');
        //$updatedOder->productID = request('productID');
        $updatedOder->orderStatus = request('orderStatus');
        // $updatedOder->dates = request('date');

        $updatedOder->save();

        return redirect('/stock/order');

    }

    // delete product
    public function deleteOrder($id) {

        $order = Order::find($id);
        $order->delete();

        return redirect('/stock/order');

    }

     // search products
    public function productSearch() {

        $search_txt = $_GET['searchQuery'];
        $searchProducts = Stock::where('productName', 'LIKE', '%'.$search_txt.'%') -> get();

        return view('StockManagement.productSearch', ['searchProducts' => $searchProducts]);

    }

    // search order
    public function orderSearch() {

        $search_txt = $_GET['searchQuery'];
        $searchOrders = Order::where('supplierName', 'LIKE', '%'.$search_txt.'%') -> get();

        return view('StockManagement.orderSearch', ['searchOrders' => $searchOrders]);

    }

    // pdf - order
    public function orderPdfReport() {
        
        $weekData = Order::where('created_at', '>', Carbon::now()->subDays(28)) -> get();

        $pdf = PDF::loadView('StockManagement.orderReport', ['weekData' => $weekData]);
        return $pdf -> download('orderReport.pdf');

    }


}
