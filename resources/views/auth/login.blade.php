<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
            <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>  

    <div class="grid grid-cols-2">
        <img src="https://i.pinimg.com/736x/5c/ab/76/5cab7668c6065666c6a5145ade1d559e.jpg" class="h-screen">
        <div class="flex justify-center items-center">
            <div class="w-full text-center">
                <h2 class="font-bold text-4xl">Welcome to Login Page</h2>
                <img src="https://png.pngtree.com/png-clipart/20200224/original/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_5247852.jpg" class="mx-auto my-4 w-40">
                <form action="{{route('login')}}" method="POST">
                    @csrf

                    <input type="email" name="email" placeholder="Enter Email" class="p-4 rounded-lg w-8/12 my-4">
                    <input type="password" name="password" placeholder="Enter Password"class="p-4 rounded-lg w-8/12 my-4">

          <br>
                    <input class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300" type="submit" value="Login">
                </form>
            </div>
        </div>


    </div>
    
</body>
</html>