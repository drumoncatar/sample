<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartsController extends Controller {
    
    public function Add(Request $request) {;
    	$this->validate($request, [
    		'product_id' => 'required',
    		'pieces' => 'required'
    	]);

    	$cart = new Cart;
    	$cart->product_id = $request->product_id;
    	$cart->product_name = $request->product_name;
    	$cart->product_price = $request->product_price;
    	$cart->pieces = $request->pieces;
    	$cart->save();

    	return redirect('/view_cart');
    }

    public function remove($id) {
    	$cart = Cart::find($id);
    	$cart->delete();

    	return redirect('/view_cart');
    }
}
