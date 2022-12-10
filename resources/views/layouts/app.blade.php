<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
  <link rel="shortcut icon" href="{{asset('image-logo/logo.png')}}">
  <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body>
    
  <nav class="flex bg-black border-gray-200 px-2 sm:px-4 py-1 dark:bg-gray-900">
    <div class="container flex flex-wrap items-center mx-auto">
    <a href="/dashboard" class="flex items-center">
        <span class="ml-10 text-3xl font-bold sha text-white">DTSI</span>
    </a>
  </div>
  <div class="flex container justify-end items-center ">
    <div class="flex items-center md:order-2">
      <div class="mr-7 ml-5">
        <button type="button" class="flex text-sm bg-gray-800 rounded-full  focus:ring-4 focus:ring-gray-800" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-11 h-11 rounded-full" src="{{URL::asset('/image-logo/logo.png')}}" alt="user photo">
        </button>
      </div>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-5 text-center py-3">
            <span class="block text-sm text-gray-900 dark:text-white font-bold">{{ Auth::user()->name }}</span>
          </div>
          <ul class="py-1" aria-labelledby="user-menu-button">
            <hr>
            <li>
              <a href="/login" class="block px-4 py-2 text-sm  text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </li>
          </ul>
        </div>
    </div>
    <div>
      <ul class="flex flex-col md:flex-row md:space-x-5  md:mt-0 md:text-sm font-medium ">
        <a href="/tambahmurid" class="flex">
          <svg class="w-6 h-6 text-white hover:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <li class="mt-0.5 text-center text-white hover:text-gray-300">
          Tambah Siswa
        </li>
        </a>
      </ul>
    </div>
  </div>
  </nav>
@yield('content')

<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>