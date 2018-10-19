@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <a href="/add_product_page">Add Product</a> / <a href="/view_cart">View Cart</a> <br /><br />
        @if(count($products) > 0)
            @foreach($products as $product)
                <div class="well">
                   <a href="/view_product/{{$product->id}}"><h3>{{$product->name}}</h3></a>
                    <small>Written on {{$product->created_at}}</small>
                </div>
            @endforeach
        @else
            <h2>It's empty in here, add a product!</h2>
        @endif
    </div>
@endsection
