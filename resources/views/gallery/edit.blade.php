@extends('layouts.app')
@section('content')

<h2 class="font-bold text-4xl text-blue-700" >Edit Categories</h2>
<hr class="h-2 mb-4 bg-blue-200">


    <form action="{{ route('gallery.update',$gallery->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
@csrf
        <input type="text" name="title" class="w-full rounded-lg border-gray-300 my-2" value="{{$gallery->title}}">
        @error('title')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror
        <img  class= "w-20" src="{{asset('images/gallery/'.$gallery->photopath)}}" alt ="">
        <input type="file"  name="photopath" class="w-full rounded-lg border-gray-300 my-2"value="{{$gallery->photopath}}">
        @error('photopath')
        <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
    @enderror
        <div class="flex">
    <input class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300" type="submit" value="Update">
    <a class="bg-red-600 text-black px-4 py-2 mx-2 rounded-lg shadow-md hover:shadow-amber-300"href="{{route('gallery.index')}}">Cancel</a>



        </div>
        
    </form>


@endsection



{{-- model ko kam chai  --}}