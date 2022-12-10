<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="{{asset('image-logo/logo.png')}}">
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex items-center justify-center min-h-screen bg-gray-300 ">
    <div class="px-8 py-6 mx-4 mt-4 mb-5 text-left rounded-xl bg-zinc-100 shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
        <div class="flex justify-center">
            <img class="rounded-full  w-32" src="{{URL::asset('/image-logo/logo.png')}}" alt="">
        </div>
        <h3 class="text-2xl font-bold text-center">Join us</h3>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="font-bold text-center text-xl">{{ $err }}</p>
        @endforeach
        @endif
        <form action="/register_action" method="POST">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block">Name<label>
                            <input type="text" name="name" placeholder="Name"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Username<label>
                            <input type="text" name="username" placeholder="Username"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" name="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Confirm Password<label>
                            <input type="password" name="password_confirm" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Create
                        Account</button>
                </div>
                <div class="mt-6 text-grey-dark">
                    Sudah Punya Akun?
                    <a class="text-blue-600 hover:underline" href="/login">
                        Login
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>  
</body>
</html>