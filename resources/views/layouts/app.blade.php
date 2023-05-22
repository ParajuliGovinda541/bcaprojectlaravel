<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])



        {{-- // jquery ko link deko --}}
        <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>  

        {{-- css ko link --}}
        <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">

        {{-- javascript code --}}

        <script src="{{asset('datatable/datatables.js')}}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 h-screen">
                <div class="w-56 h-screen bg-gray-200 shadow-lg shadow-red-300">
                    <a href="" class="text-x1 font-bold border b-2 bordder-blue 500 block m1-4 px-2 py-1 ">Dashboard</a>
                    <a href="{{route('category.index')}}" class="text-x1 font-bold border b-2 bordder-blue 500 block m1-4 px-2 py-1 ">Categories</a>
                    <a href="{{route('notice.index')}}" class="text-x1 font-bold border b-2 bordder-blue 500 block m1-4 px-2 py-1 ">Notices</a>
                    <a href="{{route('product.index')}}" class="text-x1 font-bold border b-2 bordder-blue 500 block m1-4 px-2 py-1 ">Product</a>
                    
                    <a href="{{route('gallery.index')}}" class="text-x1 font-bold border b-2 bordder-blue 500 block m1-4 px-2 py-1 ">Gallery</a>

                </div>
            </div>

             <div class="flex-1">
                <div class="px-10">
                    @yield('content')
                    

                

              </div>
            </div>
        </div>
    </body>
</html>
