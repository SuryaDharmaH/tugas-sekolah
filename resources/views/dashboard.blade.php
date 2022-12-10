@extends('layouts.app')
<title>Dashboard</title>
@section('content')
@if(session('succes'))
        <p class="font-bold text-center mt-5 text-xl">{{ session('succes') }}</p>
        @endif
        @if(session('sucess'))
        <p class="font-bold text-center mt-5 text-xl">{{ session('sucess') }}</p>
        @endif
        @if(session('success'))
        <p class="font-bold text-center mt-5 text-xl">{{ session('success') }}</p>
        @endif
<div class='w-full pt-14'>
    <div class="ml-28">
    <h1 class="text-4xl font-bold">Dashboard</h1>
</div> 
            <table class='mx-auto max-w-7xl w-10/12 mt-8 shadow-2xl mb-10  pb-3 whitespace-nowrap rounded-t-lg bg-divide-y divide-gray-300 overflow-hidden'>
                <thead class="bg-gray-900">
                    <tr class="text-white">
                        <th></th>
                        <th class="font-semibold text-base py-4 text-center"> Name </th>
                        <th class="font-semibold text-base py-4 text-center"> NISN </th>
                        <th class="font-semibold text-base py-4 text-center"> Jenis Kelamin</th>
                        <th class="font-semibold text-base py-4 text-center"> Kelas </th>
                        <th class="font-semibold text-base py-4 text-center"> Jurusan </th>
                        <th class="font-semibold text-base py-4 text-center"> Keahlian</th>
                        <th class="font-semibold text-base py-4 text-center"></th>
                        <th class="font-semibold text-base py-4 text-center"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 ">
                  @foreach($data as $murid)
                    <tr>
                        <td class="pl-6 py-4">
                        <div class="flex items-center">
                                <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover border border-black rounded-full' alt='User avatar' src="{{URL::asset('/image-logo/person.png')}}" /> </div>
                                <div>
                        </td>
                        <td class="py-4">
                                    <p class="text-sm font-semibold text-center "> {{ $murid->name }} </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                                    <p class="text-sm font-semibold text-center "> {{ $murid->nisn }} </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <p class="text-sm font-semibold "> {{ $murid->jeniskelamin }} </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm font-semibold tracking-wide text-center"> {{ $murid->kelas }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class=" text-sm font-semibold tracking-wide text-center"> {{ $murid->jurusan }} </p>
                        </td>
                        <td class="py-4 text-center"> <span class="text-black text-sm  py-1.5 px-6 font-semibold rounded-full"> {{ $murid->keahlian }} </span> </td>
                        <td class=" py-4 text-center"> <a href="/update/{{ $murid->id }}" class="py-1.5 px-5 font-medium text-white bg-blue-600 hover:bg-blue-500 rounded-md">Edit</a> </td>
                        <td class=" py-4 text-center"> <a href="/hapus/{{ $murid->id }}" class="py-1.5 px-5 font-medium text-white bg-red-600 hover:bg-red-500 rounded-md">Delete</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endsection