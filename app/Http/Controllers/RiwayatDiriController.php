<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addCV;
use App\Models\RiwayatDiri;
use App\Models\DataStore1;

class RiwayatDiriController extends Controller
{
    public function index()
    {
        $v = RiwayatDiri::all();
        return view('dashboard.addCV.indexriwayat', compact('v'));
    }


    public function create()
    {
        $v = DataStore1::all();
        return view('dashboard.addCV.createriwayat', compact('v'));
    }

    public function save(Request $request)
{
    $request->validate([
        'id_diri' => 'required',
        'Pengalaman_pekerjaan' => 'required',
        'Pengalaman_organisasi' => 'required',
        'Perguruan_tinggi' => 'required',
        'SMA' => 'required',
        'SMP' => 'required',
    ], [
        'required' => 'Kolom :attribute wajib diisi.',
    ]);

    try {
        $data = new RiwayatDiri;
        $data->customSave($request->all());

        return redirect('cv-dashboard')->with('success', 'Data berhasil disimpan.');
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
        $Editriwayat = RiwayatDiri::all()->where('id',$id)->first();
        return view('dashboard.addCV.editriwayat',compact('Editriwayat'));
    }


    public function update(Request $request)
    {
        try {
            $update = [
                'id_diri' => $request->id_diri,
                'Pengalaman_pekerjaan' => $request->Pengalaman_pekerjaan,
                'Pengalaman_organisasi'   => $request->Pengalaman_organisasi,
                'Perguruan_tinggi'  => $request->Perguruan_tinggi,
                'SMA' => $request->SMA,
                'SMP'   => $request->SMP,
            ];
            RiwayatDiri::where('id',$request->id)->update($update);
            // dd($update);
            return redirect('cv-dashboard');
        } catch(\Exception $e) {
            return redirect()->back();
        }
    }

    public function delete(Request $request)
    {
        try {
            DataStore1::destroy($request->id);
            return redirect()->route('cv-dashboard')->with('success', 'Data berhasil dihapus.');        
        } catch(\Exception $e) {
            return redirect()->back();
        }
    }

}
