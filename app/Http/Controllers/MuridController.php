<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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


    public function insertdata(Request $request){
        $data = Murid::create($request->all());
        return redirect('/dashboard')->with('Sukses','Data Berhasil Ditambahkan');
    }

    public function update($id){

        $data = Murid::find($id);

        return view('update', compact('data'));

    }

    public function updatemurid(Request $request, $id, Murid $murid){
        $data = Murid::find($id);
        $data->update($request->all());
        
        return redirect('/dashboard')->with('Sukses','Data Berhasil Diupdate');


    }
    public function hapus($id){
        $data = Murid::find($id);
        $data->delete();

        return redirect('/dashboard')->with('Sukses','Data Berhasil Dihapus');
    }
}
