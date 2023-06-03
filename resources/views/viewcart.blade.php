@extends('master')
@section('content')
@include('layouts.message')

<h1 class="text-center font-bold  text-3xl">Items in Cart</h1>

@foreach ($carts as $cart )
    <div>
        <img src="{{asset('images/product/'.$cart->product->photopath)}}" class="h-32 w-44" alt="">

    </div>
@endforeach