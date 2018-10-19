<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;

class PagesController extends Controller {
    
    public function index() {
    	// $greet = 'Hey there!';
    	$products = Product::all();
    	return view('pages.index')->with('products', $products);
    }

    public function view_cart() {
    	$carts = Cart::all();
    	return view('pages.view_cart')->with('carts', $carts);
    	// return view('pages.view_cart');
    }

    public function add_product_page() {
    	return view('pages.add_product');
    }

    public function view_product() {
    	// $data = array(
    	// 	'Name' => 'Papaya',
    	// 	'Price' => '8.30',
    	// 	'Quantity' => '3',
    	// 	'Size' => 'Large',
    	// 	'Code' => 1234
    	// );


    	// return view('pages.view_product')->with($data);
    	return view('pages.view_product');
    }
}
