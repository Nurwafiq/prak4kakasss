<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function mahasiswa() //menampilkan form
    {
        return view('mahasiswa');
    }

    public function data(Request $request) //menangkap data yang dikirim melalui form
    {        
        // $data=[
        //     'nim'=> $request->nim,
        //     'nama'=>$request->nama,
        //     'kelas'=>$request->kelas,
        //     'jurusan'=>$request->jurusan,
        // ];
        // dd($data);
        

        $validasi=$request->validate(
            [
            'nim'=> 'required | numeric',
            'nama' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required'
        ],

        [
            'nim.required' => 'Field harus diisi!',
            'nim.numeric' => 'Field harus diisi dengan angka!'
        ]
    );
       
    }
}

