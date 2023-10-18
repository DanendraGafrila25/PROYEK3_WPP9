<?php
    if(old())
    {
        $Pengalaman_pekerjaan = old('Pengalaman_pekerjaan');
        $Pengalaman_organisasi = old('Pengalaman_organisasi');
        $Perguruan_tinggi = old('Perguruan_tinggi');
        $SMA = old('SMA');
        $SMP = old('SMP');
    } else {
        $Pengalaman_pekerjaan = null;
        $Pengalaman_organisasi = null;
        $Perguruan_tinggi = null;
        $SMA = null;
        $SMP = null;
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
                        <h4 class="card-title text-center">Riwayat Diri</h4>

                        @include('errors.message')

                        <div class="table-responsive">                            
                            <form method="POST" action="/addRiwayat-store" onsubmit="return confirmSubmit()">

                                @csrf
                                 <div class="form-group">
                                    <label for="nama">Data Diri:</label>
                                    <select name="id_diri" class="form-control" required>
                                        @foreach ($v as $t)
                                        <option value="{{$t->id}}">{{$t->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Pengalaman Pekerjaan:</label>
                                    <input type="text" name="Pengalaman_pekerjaan" class="form-control" value="" required>
                                </div>
                                

                                <div class="form-group">
                                    <label for="alamat">Pengalaman Organisasi:</label>
                                    <input type="text" name="Pengalaman_organisasi" class="form-control" value="{{$Pengalaman_organisasi}}" required>
                                </div>
                                    <div class="form-group">
                                        <label for="telepon">Perguruan Tinggi</label>
                                        <input type="text" name="Perguruan_tinggi" class="form-control" value="{{$Perguruan_tinggi}}" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="email">SMA</label>
                                        <input type="text" name="SMA" class="form-control" value="{{$SMA}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">SMP</label>
                                    <input type="text" class="form-control" id="tgl_lahir" name="SMP" value="{{ $SMP }}">
                                </div>
                                <div class="form-group">
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