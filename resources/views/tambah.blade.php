@extends('layouts.header')
<title>TambahSiswa</title>
@section('content')
    <div class="flex justify-center pt-10">
    <div class="border bg-white shadow-2xl pl-32 pb-20 pt-20 pr-32">
    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                 @csrf
                 <h1 class="flex justify-center mb-6 text-2xl  font-semibold">Tambah Siswa</h1>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-64 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Nama
      </label>
      <input required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="name" placeholder="Nama"s="form-control">
    </div>
    <div class="w-40 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Nisn
      </label>
      <input required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" name="nisn" placeholder="Nisn" class="form-control">
    </div>
    <div class="w-56 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
             JenisKelamin
          </label>
          <div class="relative">
              <select required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="jeniskelamin" class="form-control">
                <option hidden></option>
                <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
          </div>
      </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
           Kelas
        </label>
        <div class="relative">
            <select required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" class="form-control"  name="kelas" >
            <option hidden></option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label required class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Jurusan
      </label>
      <div class="relative">
        <select required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="jurusan" >
          <option hidden></option>
          <option value="RPL A">RPL A</option>
          <option value="RPL B">RPL B</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
           Keahlian
        </label>
        <div class="relative">
            <select required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" class="form-control"  class="form-control"  name="keahlian" >
              <option hidden></option>
              <option value="frontend">Frontend</option>
              <option value="backend">Backend</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>  

    </div>
    <div class="mt-7 ml-2 ">
    <button type="submit" class="inline-block px-10 py-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded-lg hover:bg-blue-700">Submit</button> 
    </div>
  </div>
</form>
</div>
</div>
@endsection