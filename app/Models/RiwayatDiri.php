<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatDiri extends Model
{
    use HasFactory;
    
    protected $table = 'riwayat_diri';
    protected $fillable = ['id','id_diri','Pengalaman_pekerjaan', 'Pengalaman_organisasi', 'Perguruan_tinggi', 'SMA', 'SMP'];

    public function customSave($data)
    {
        $this->id_diri = $data['id_diri'];
        $this->Pengalaman_pekerjaan = $data['Pengalaman_pekerjaan'];
        $this->Pengalaman_organisasi = $data['Pengalaman_organisasi'];
        $this->Perguruan_tinggi = $data['Perguruan_tinggi'];
        $this->SMA = $data['SMA'];
        $this->SMP = $data['SMP'];

        return $this->save();
    }
}
