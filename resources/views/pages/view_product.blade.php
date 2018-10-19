@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <h1>VIEW PRODUCT</h1>
        @if(isset($product->message))
        	<h2>{{$product->message}}</h2>
        @endif
        <a href="/">Go back</a> / <a href="/view_cart">View Cart</a> <br /><br />
        <p><a href="/edit_product/{{$product->id}}">Edit</a> / <a href="/delete_product/{{$product->id}}">Delete</a></p>
        <h3>Name : {{$product->name}}</h3>
        <p>Price : {{$product->price}}</p>
        <p>Quantity : {{$product->quantity}}</p>
        <p>Size : {{$product->size}}</p>
        <p>Code : {{$product->code}}</p>

		<form action="/add_to_cart" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="product_id" value="{{$product->id}}">
			<input type="hidden" name="product_name" value="{{$product->name}}">
			<input type="hidden" name="product_price" value="{{$product->price}}">
			Pieces to cart : <input type="text" name="pieces">
			<button type="submit">Add to Cart</button>
		</form>
    </div>
@endsection
