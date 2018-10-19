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

    	<form action="/insert_product" method="POST">
    		Name : <input type="text" name="name" id="name"> <br />
	        Price : <input type="text" name="price" id="price"> <br />
	        Quantity : <input type="text" name="quantity" id="quantity"> <br />
	        Size : <input type="text" name="size" id="size"> <br />	
	        <input type="hidden" name="_token" value="{{ csrf_token() }}">
	        <button type="submit">Add Product</button>
		<!-- {!! Form::close() !!} -->
		</form>
    </div>
@endsection
