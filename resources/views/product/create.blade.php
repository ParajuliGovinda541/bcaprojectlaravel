@extends('layouts.app')
@section('content')

        <h2 class="">Add Products</h2>
        <hr class="h-1 mb-4 bg-blue-200">


    <form action="{{ route('product.store')}}" method="POST" class="mt-5" enctype="multipart/form-data">
@csrf
        <input type="text" placeholder="Product Name" name="name" class="w-full rounded-lg border-gray-300 my-2" value="{{old('name')}}">
        @error('name')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror
        <input type="text" placeholder="stock" name="stock" class="w-full rounded-lg border-gray-300 my-2"value="{{old('stock')}}">
        @error('stock')
        <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
    @enderror
    <input type="text" placeholder="Price" name="price" class="w-full rounded-lg border-gray-300 my-2"value="{{old('price')}}">
    @error('price')
    <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
@enderror

    <input type="file" name="photopath" class="w-full rounded-lg border-gray-300 my-2"value="{{old('photopath')}}">
    @error('photopath')
    <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
@enderror
<input type="text" placeholder="product description" name="description" class="w-full rounded-lg border-gray-300 my-2" value="{{old('description')}}">
@error('description')
    <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
@enderror

<select name="category_id"class="select select-ghost w-full max-w-xs">
  <option disabled selected>Select</option>
  @foreach ($categories as $category )
  <option value="{{$category->id}}">{{$category->name}}</option>
  @endforeach


</select>



        <div class="flex">
    <input class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300" type="submit" value="Add Product">
    <a class="bg-red-600 text-black px-4 py-2 mx-2 rounded-lg shadow-md hover:shadow-amber-300"href="{{route('product.index')}}">Exit</a>



        </div>
        
    </form>


@endsection



{{-- model ko kam chai  --}}