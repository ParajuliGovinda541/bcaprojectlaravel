@extends('layouts.app')
@section('content')

@include('layouts.message')
    <h2 class="font-bold text-4xl text-blue-700" >Gallery</h2>
    <hr class="h-1 bg-blue-200">

<div class="my-4 text-right px-10">
    <a class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300"href="{{route('gallery.create')}}">Add Gallery</a>
</div>
    <table id="mytable">
        <thead>
            <th>S.N</th>
            <th>Image</th>
            <th>PhotoPath</th>
            <th>Action</th>

        </thead>
        <tbody>
            @foreach($galleries as $gallery)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$gallery->title}}</td>
            <td><img  class= "w-20" src="{{asset('images/gallery/'.$gallery->photopath)}}" alt ="{{asset('images/gallery/'.$gallery->photopath)}}"></td>
                <td>
                    <a href="{{route('gallery.edit',$gallery->id)}}"class="bg-blue-600 px-2 py-1 rounded text-white hover:shadow-blue-600">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete ?')" href="{{route('gallery.destroy',$gallery->id)}}"class="bg-red-600 px-2 py-1 rounded text-white hover:shadow-blue-400">Delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        let table = new DataTable('#mytable');
    </script>
    

@endsection