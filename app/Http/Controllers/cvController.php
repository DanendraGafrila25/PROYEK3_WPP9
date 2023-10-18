<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addCV;
use App\Models\DataStore1;
use App\Models\RiwayatDiri;

class cvController extends Controller
{
    public function index()
    {
     
        $v = DataStore1::all();
        $d = RiwayatDiri::all();
        return view('dashboard.addCV.index', compact('v', 'd'));
    }


    public function create()
    {
        return view('dashboard.addCV.create');
    }

    public function save(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'no_telepon' => 'required',
        'email' => 'required',
        'tgl_lahir' => 'required',
        'jenis_kelamin' => 'required',
    ], [
        'required' => 'Kolom :attribute wajib diisi.',
    ]);

    try {
        $data = new DataStore1;
        $data->customSave($request->all());

        return redirect('addRiwayat-create')->with('success', 'Data berhasil disimpan.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
    }
}


    public function show($id)
    {
        $data = app('App/Models/addCV')->cariCV($id);

        if(empty($data))
        {
            Session()->flash('alert-danger', 'CV yang anda cari tidak ditemukan');
            return redirect('/dashboard/addCV');
        }

        return view('dashboard.addCV.CurriculumVitaes', compact(['data']));
    }

    public function Edit($id)
    {
        $EditCV = DataStore1::all()->where('id',$id)->first();
        return view('dashboard.addCV.edit',compact('EditCV'));
    }

    public function Getid($id)
    {
        $Detail = RiwayatDiri::all()->where('id_diri',$id)->first();
        return view('dashboard.addCV.detail',compact('Detail'));
    }


    public function update(Request $request)
    {
        try {
            $update = [
                'nama' => $request->nama,
                'alamat'   => $request->alamat,
                'no_telepon'  => $request->no_telepon,
                'email' => $request->email,
                'tgl_lahir'   => $request->tgl_lahir,
                'jenis_kelamin'   => $request->jenis_kelamin,
            ];
            DataStore1::where('id',$request->id)->update($update);
            // dd($update);
            return redirect('cv-dashboard');
        } catch(\Exception $e) {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        try {
        //    $delete= DataStore1::destroy($request->id);
            $delete = DataStore1::findOrFail($id);
            $delete->delete();
            return redirect('cv-dashboard')->with('success', 'Data berhasil dihapus.');        
        } catch(\Exception $e) {
            return redirect()->back();

        }
    }

}
