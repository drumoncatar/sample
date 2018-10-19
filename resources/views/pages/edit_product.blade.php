@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
    	<a href="/">Go back</a> / <a href="/view_cart">View Cart</a> <br /><br />
    	<!-- {!! Form::open(['action' => 'POST', 'url' => 'PostsController@store']) !!} -->
    	@if(count($errors) > 0) 
			@foreach($errors->all() as $error)
				<div class="alert alert-danger">
					{{$error}}
				</div>
			@endforeach
		@endif
		
		<h1>Edit Product</h1>
    	<form action="/update_product/{{$product->id}}" method="POST">
    		Name : <input type="text" name="name" id="name" value="{{$product->name}}"> <br />
	        Price : <input type="text" name="price" id="price" value="{{$product->price}}"> <br />
	        Quantity : <input type="text" name="quantity" id="quantity" value="{{$product->quantity}}"> <br />
	        Size : <input type="text" name="size" id="size" value="{{$product->size}}"> <br />	
	        <input type="hidden" name="_token" value="{{ csrf_token() }}">
	        <input type="hidden" name="id" value="{{$product->id}}">
	        <button type="submit">Edit Product</button>
		<!-- {!! Form::close() !!} -->
		</form>
    </div>
@endsection
