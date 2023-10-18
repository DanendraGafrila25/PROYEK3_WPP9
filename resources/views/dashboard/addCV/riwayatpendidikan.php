<?php
    if(old())
    {
        $nama = old('nama');
        $alamat = old('alamat');
        $no_telepon = old('no_telepon');
        $email = old('email');
    } else {
        $nama = $data->nama;
        $alamat = $data->alamat;
        $no_telepon = $data->no_telepon;
        $email = $data->email;
    }
?>

@extends('layouts.tempDashboard')

@section('judul')
Curriculum Vitae's
@endsection

@section('mainds')
<div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                  <div class="col-12 grid-margin">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title text-center">Curriculum Vitae's</h4>
                              <div class="table-responsive">
                                  <form method="post" action="{{url('/dashboard/addCV'.$data->id)}}" onsubmit="return confirmSubmit()">
                                    @csrf
                                        <div class="clearfix">
                                            <button type="button" class="btn btn-primary float-left">Previous</button>
                                            <button type="button" class="btn btn-primary float-right">Next</button>
                                        </div>
                                  </form>
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