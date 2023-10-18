<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    public function store ()
    {
         
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        try {

            $data = new data_store1;
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            $data->no_telepon= $request->no_telepon;
            $data->email = $request->email;
            $data->tgl_lahir = $request->tgl_lahir;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->save();

            return redirect()->route('addCV-create');
            
        } catch(\Exception $e) {
            return redirect()->back();
        }
}
}
