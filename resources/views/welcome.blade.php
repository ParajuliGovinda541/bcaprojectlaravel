@extends('master')
@section('content')


<h2 class="font-bold text-4xl text-center my-5">Our Products</h2>

    

        <div class="grid grid-cols-4 gap-10 px-24 mb-10">
            @foreach ($products as $product)
<a href="{{route('viewproduct',$product->id)}}">
            <div class="bg-gray-100 rounded-lg shadow-lg relative">
                <img src="{{asset('images/product/'.$product->photopath)}}" alt="" class="w-full h-72 object-cover rounded-t-lg">
                <div class="p-2">
                    <p class="font-bold text-2xl">{{$product->name}}</p>
                    <p class="font-bold text-2xl">
                        @if ($product->price !='')
                        <span class="line-through text-gray-500 text-xl">Rs.{{$product->oldprice}}</span>Rs.{{$product->price}}
                            
                    </p>
                    @endif

                </div>

                @if ($product->oldprice !='')
                @php
                    $discount=($product->oldprice -$product->price)/$product->oldprice*100;
                @endphp
                
                <p class="absolute top-1 right-1 bg-blue-600 text-white rounded-lg px-4 py-1" >
                    {{$discount}}% off

                </p>
                @endif


            </div>
        </a>
            @endforeach



            </div>

            
            <div class="mx-24 my-10">
                {{$products->links()}}
            </div>

@endsection