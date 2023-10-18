<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataStore1 extends Model
{
    use HasFactory;

    protected $table = 'data_store1';
    protected $fillable = ['id','nama', 'alamat', 'no_telepon', 'email', 'tgl_lahir', 'jenis_kelamin'];

    public function customSave($data)
    {
        $this->nama = $data['nama'];
        $this->alamat = $data['alamat'];
        $this->no_telepon = $data['no_telepon'];
        $this->email = $data['email'];
        $this->tgl_lahir = $data['tgl_lahir'];
        $this->jenis_kelamin = $data['jenis_kelamin'];

        return $this->save();
    }
}


