<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller {
    
    public function view($id) {
    	$product = Product::find($id);
    	return view('pages.view_product')->with('product', $product);
    }

    public function edit($id) {
    	$product = Product::find($id);
    	return view('pages.edit_product')->with('product', $product);
    }

    private function generateCode(){
    	$x = 4;
	    $i = 0;
	    $code = "";

	    while($i < $x){
	        $code .= mt_rand(0, 9);
	        $i++;
	    }

	    return $code;
	}

	public function insert(Request $request) {
    	$request['code'] = $this->generateCode();
    	$this->validate($request, [
    		'name' => 'required',
    		'price' => 'required',
    		'quantity' => 'required',
    		'size' => 'required'
    	]);

    	$product = new Product;
    	$product->name = $request->name;
    	$product->price = $request->price;
    	$product->quantity = $request->quantity;
    	$product->size = $request->size;
    	$product->code = $request->code;
    	$product->save();

    	return redirect('/');
    }

    public function update(Request $request, $id) {
    	$this->validate($request, [
    		'name' => 'required',
    		'price' => 'required',
    		'quantity' => 'required',
    		'size' => 'required'
    	]);

    	$product = Product::find($id);
		$product->name = $request->name;
    	$product->price = $request->price;
    	$product->quantity = $request->quantity;
    	$product->size = $request->size;
		$product->save();

		$product = Product::find($id);
		$product->message = 'Updated!';
    	return view('pages.view_product')->with('product', $product);
    }

    public function add_to_cart(Request $request) {
    	
    }

    public function delete($id) {
    	$product = Product::find($id);
    	$product->delete();

    	return redirect('/');
    }
}
