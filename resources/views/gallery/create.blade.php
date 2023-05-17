@extends('layouts.app')
@section('content')

        <h2 class="">Add Gallery</h2>
        <hr class="h-1 mb-4 bg-blue-200">


    <form action="{{ route('gallery.store')}}" method="POST" class="mt-5" enctype ="multipart/form-data">
@csrf
        <input type="text" placeholder="Image Name" name="title" class="w-full rounded-lg border-gray-300 my-2" value="{{old('title')}}">
        @error('title')
        <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror
        <input type="file" placeholder="Priority" name="photopath" class="w-full rounded-lg border-gray-300 my-2"value="{{old('photopath')}}">
        @error('photopath')
        <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
    @enderror
        <div class="flex">
    <input class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300" type="submit" value="Add Gallery">
    <a class="bg-red-600 text-black px-4 py-2 mx-2 rounded-lg shadow-md hover:shadow-amber-300"href="{{route('gallery.index')}}">Exit</a>
        </div>
        
    </form>


@endsection



{{-- model ko kam chai  --}}