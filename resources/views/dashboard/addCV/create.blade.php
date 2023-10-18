<?php
    if(old())
    {
        $nama = old('nama');
        $alamat = old('alamat');
        $no_telepon = old('no_telepon');
        $email = old('email');
    } else {
        $nama = null;
        $alamat = null;
        $no_telepon = null;
        $email = null;
    }
?>

@extends('layouts.tempDashboard')

@section('judul')
Create-New
@endsection

@section('mainds')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-7 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Data Diri</h4>

                        @include('errors.message')

                        <div class="table-responsive">                            
                            <form method="POST" action="/addCV-store" onsubmit="return confirmSubmit()">

                                @csrf

                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" name="nama" class="form-control" value="{{$nama}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <input type="text" name="alamat" class="form-control" value="{{$alamat}}" required>
                                </div>

                                

                                    <div class="form-group">
                                        <div class="form-group d-flex">
                                    <div class="flex-grow-1 mr-2">
                                        <label for="telepon">No Telepon/Whatsapp:</label>
                                        <input type="text" name="no_telepon" class="form-control" value="{{$no_telepon}}" required>
                                    </div>

                                    <div class="flex-grow-1">
                                        <label for="email">Alamat Email:</label>
                                        <input type="email" name="email" class="form-control" value="{{$email}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir:</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin:</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="laki" name="jenis_kelamin" value="Laki-laki">
                                        <label class="form-check-label" for="laki">Laki-laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="perempuan" name="jenis_kelamin" value="Perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                    <div class="btn-group">
                                     <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
                                    </div>
                                </div>                                                                           
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

<script>
    function confirmSubmit()
    {
        var r = confirm('Lanjutkan penyimpanan data?')

        if(r)
        {
            return true;
        } else {
            return false;
        }
    }
</script>

@endsection