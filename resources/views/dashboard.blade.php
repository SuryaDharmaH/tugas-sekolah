<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <title> dashboard</title>
</head>
<body>
    
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="flex justify-between md:order-2">
  <div id="user">
      <button  onclick="toggleMenu()" type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" >      
        <img class="w-12 h-12 rounded-full" src="{{URL::asset('/image/login.jpg')}}" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div id="menu" class="hidden bg-white rounded mt-3  shadow dark:bg-gray-700 dark:divide-gray-600">
        <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
        <div class="font-bold font-serif ">Halo,Admin</div>
      </div>
        <div class="py-1">
        <a href="/" class=" block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
        </div>
    </div>
</div>
<div>
<div class=" items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4  rounded-lg  md:flex-row md:space-x-4 md:mt-0 md:text-sm md:font-medium ">
      <li>
        <a href="#" class="block py-3 pr-5 pl-5 text-white bg-black rounded-md">Tambah Siswa</a>
      </li>
    
    </ul>
  </div>
  </div>
  </div>
</nav>
        <div class=' w-full'>
            <table class='mx-auto max-w-7xl  w-full mt-20 shadow-2xl  pb-3 whitespace-nowrap rounded-lg bg-divide-y divide-gray-300 overflow-hidden'>
                <thead class="bg-gray-900">
                    <tr class="text-white text-left">
                        <th class="font-semibold text-base pl-10 py-4 "> Name </th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Kelas </th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Jurusan </th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Status</th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Edit </th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Hapus </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src="{{URL::asset('/image/login.jpg')}}" /> </div>
                                <div>
                                    <p class="text-sm font-semibold "> Mira Rodeo </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm font-semibold tracking-wide text-center"> XII</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class=" text-sm font-semibold tracking-wide text-center"> Rekasaya Perangkat Lunak </p>
                        </td>
                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm  py-1.5 px-6  bg-green-600 font-semibold rounded-full"> Active </span> </td>
                        <td class="px-6 py-4 text-center"> <a href="#" class="py-1.5 px-5 font-medium text-white bg-blue-600 hover:bg-blue-500 rounded-md">Edit</a> </td>
                        <td class="px-6 py-4 text-center"> <a href="#" class="py-1.5 px-5 font-medium text-white bg-red-600 hover:bg-red-500 rounded-md">Delete</a> </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src="{{URL::asset('/image/login.jpg')}}" /> </div>
                                <div>
                                    <p class="text-sm font-semibold "> Mira Rodeo </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm font-semibold tracking-wide text-center"> XII</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class=" text-sm font-semibold tracking-wide text-center"> Rekasaya Perangkat Lunak </p>
                        </td>
                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm  py-1.5 px-6  bg-green-600 font-semibold rounded-full"> Active </span> </td>
                        <td class="px-6 py-4 text-center"> <a href="#" class="py-1.5 px-5 font-medium text-white bg-blue-600 hover:bg-blue-500 rounded-md">Edit</a> </td>
                        <td class="px-6 py-4 text-center"> <a href="#" class="py-1.5 px-5 font-medium text-white bg-red-600 hover:bg-red-500 rounded-md">Delete</a> </td>
                    </tr> 

                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src="{{URL::asset('/image/login.jpg')}}" /> </div>
                                <div>
                                    <p class="text-sm font-semibold "> Mira Rodeo </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm font-semibold tracking-wide text-center"> XII</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class=" text-sm font-semibold tracking-wide text-center"> Rekasaya Perangkat Lunak </p>
                        </td>
                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm  py-1.5 px-6  bg-green-600 font-semibold rounded-full"> Active </span> </td>
                        <td class="px-6 py-4 text-center"> <a href="#" class="py-1.5 px-5 font-medium text-white bg-blue-600 hover:bg-blue-500 rounded-md">Edit</a> </td>
                        <td class="px-6 py-4 text-center"> <a href="#" class="py-1.5 px-5 font-medium text-white bg-red-600 hover:bg-red-500 rounded-md">Delete</a> </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src="{{URL::asset('/image/login.jpg')}}" /> </div>
                                <div>
                                    <p class="text-sm font-semibold "> Mira Rodeo </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm font-semibold tracking-wide text-center"> XII</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class=" text-sm font-semibold tracking-wide text-center"> Rekasaya Perangkat Lunak </p>
                        </td>
                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm  py-1.5 px-6  bg-green-600 font-semibold rounded-full"> Active </span> </td>
                        <td class="px-6 py-4 text-center"> <a href="#" class="py-1.5 px-5 font-medium text-white bg-blue-600 hover:bg-blue-500 rounded-md">Edit</a> </td>
                        <td class="px-6 py-4 text-center"> <a href="#" class="py-1.5 px-5 font-medium text-white bg-red-600 hover:bg-red-500 rounded-md">Delete</a> </td>
                    </tr>
                </tbody>
            </table>
        </div>

  <!-- Javascript Login -->
  <script>
        var menu = document.getElementById("menu");

        // open/close the menu when the user clicks on the button
        function toggleMenu() {
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        }
     // close the menu when the user clicks outside of it 
     window.onclick = function (event) {
            var dropdownWrapper = document.getElementById('user');
            if (!dropdownWrapper.contains(event.target) && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        }
    </script>

</body>
</html>