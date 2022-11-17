@extends('layouts.app')

@section('content')
<div class=' w-full'>
            <table class='mx-auto max-w-7xl w-10/12 mt-20 shadow-2xl  pb-3 whitespace-nowrap rounded-t-lg bg-divide-y divide-gray-300 overflow-hidden'>
                <thead class="bg-gray-900">
                    <tr class="text-white text-left">
                        <th></th>
                        <th class="font-semibold text-base pl-6 py-4">Nisn</th>
                        <th class="font-semibold text-base pl-6 py-4"> Name </th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Kelas </th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Jurusan </th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Keahlian</th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Edit </th>
                        <th class="font-semibold text-base px-6 py-4 text-center"> Hapus </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                  @foreach($data as $murid)
                    <tr>
                        <td class="pl-6 py-4">
                        <div class="flex items-center">
                                <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover border border-black rounded-full' alt='User avatar' src="{{URL::asset('/image/person.png')}}" /> </div>
                                <div>
                        </td>
                        <td class="px-6 py-4">
                                    <p class="text-sm font-semibold "> {{ $murid->nisn }} </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                                    <p class="text-sm font-semibold "> {{ $murid->name }} </p>
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
                        <td class="px-6 py-4 text-center"> <a href="/update/{{ $murid->id }}" class="py-1.5 px-5 font-medium text-white bg-blue-600 hover:bg-blue-500 rounded-md">Edit</a> </td>
                        <td class="px-6 py-4 text-center"> <a href="/hapus/{{ $murid->id }}" class="py-1.5 px-5 font-medium text-white bg-red-600 hover:bg-red-500 rounded-md">Delete</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endsection