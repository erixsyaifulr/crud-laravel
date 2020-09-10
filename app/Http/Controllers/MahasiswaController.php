<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa; //model

class MahasiswaController extends Controller
{
    
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa/index', ['mahasiswa'=>$mahasiswa]);
    }

    
    public function create()
    {
        return view('mahasiswa/create');
    }

   
    public function store(Request $request)
    {

        $request->validate([
            'nama'=> 'required',
            'nim'=> 'required|size:9',
            'email'=> 'required',
            'jurusan'=> 'required'
        ]);
        //pakai update at dan create at
            // $mhs=new Mahasiswa;
            // $mhs->nama=$request->nama;
            // $mhs->nim=$request->nim;
            // $mhs->email=$request->email;
            // $mhs->jurusan=$request->jurusan;
            // $mhs->save();

        //harus pakai fillable di model
            // Mahasiswa::create([
            //     'nama'=>$request->nama,
            //     'nim'=>$request->nim,
            //     'email'=>$request->email,
            //     'jurusan'=>$request->jurusan
            // ]);

        //sama diatasnya tapi cuma sebaris
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('status','Berhasil tambah data');
    }

   
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa/detail', compact('mahasiswa'));
    }

   
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa/edit', compact('mahasiswa'));
    }

//   reques adalah data baru
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama'=> 'required',
            'nim'=> 'required|size:9',
            'email'=> 'required',
            'jurusan'=> 'required'
        ]);

        Mahasiswa::where('id',$mahasiswa->id)
        ->update([
            'nama'=>$request->nama,
            'nim'=>$request->nim,
            'email'=>$request->email,
            'jurusan'=>$request->jurusan
        ]);
        return redirect('/mahasiswa')->with('status','Berhasil ubah data');
    }

  
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with('status','Berhasil dihapus');
    }
}
