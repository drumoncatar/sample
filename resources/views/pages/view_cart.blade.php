@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <h1>VIEW CART</h1>
        <a href="/">Go back</a> <br /> <br />
        <?php 
        	$total = 0;
        	$price_per_product = 0;
        ?>
        @if(count($carts) > 0)
            @foreach($carts as $cart)
                <div class="well">
                	<p>Name : {{$cart->product_name}} / Pcs : {{$cart->pieces}} / Price : {{$cart->product_price}} per piece - <a href="/cart_remove/{{$cart->id}}">Remove</a></p>
                </div>
                <?php 
                	$price_per_product =+ $cart->pieces*$cart->product_price;
                	$total = $total + $price_per_product;
                ?>
            @endforeach

            	<p>Total : <?php echo $total; ?></p>
        @else
        	<h3>Cart is empty</h3>
        @endif
    </div>
@endsection
