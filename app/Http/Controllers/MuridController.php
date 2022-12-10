<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SiswaRequest;
use App\Models\Murid; 

class MuridController extends Controller
{
    public function index()
    {
        $data = Murid::all();
        return view('dashboard',compact('data'));
    }

    public function tambahmurid(){
        return view('tambah');
    }


    public function insertdata(SiswaRequest $request){
        $data = Murid::create($request->all());
        return redirect('/dashboard')->with('succes','Data Berhasil Ditambahkan');
    }

    public function update($id){

        $data = Murid::find($id);

        return view('update', compact('data'));

    }

    public function updatemurid(Request $request, $id, Murid $murid){
        $data = Murid::find($id);
        $data->update($request->all());
        
        return redirect('/dashboard')->with('sucess','Data Berhasil Diupdate');


    }
    public function hapus($id){
        $data = Murid::find($id);
        $data->delete();

        return redirect('/dashboard')->with('success','Data Berhasil Dihapus');
    }
}
