@extends('layouts.tempDashboard')

@section('judul')
Dashboard
@endsection

@section('mainds')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                  <div class="col-12 grid-margin">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title text-center">CV Saya</h4>
                              <div class="table-responsive">
                                  <form>
                                  <div class="clearfix">
                                            &nbsp
                                            <a href="/addCV-create" class="btn btn-danger">add cv</a>
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
        
        <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                  <div class="col-12 grid-margin">
                      <div class="card">
                          <div class="card-body">
                          <table class="table table-striped table-responsive">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach($v as $data)
            <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->no_telepon }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->tgl_lahir }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td><a class="fas fa-pencil" href="{{ url('addCV-edit/'.$data->id) }}"></a></td>
                <td><form method="POST" action="{{ route('addCV-delete-cv',$data->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="fas fa-trash-alt"></button>
                </form></td>
                <td><a class="fas fa-magnifying-glass" href="{{ url('addCV-detail/'.$data->id) }}"></a></td>
            </tr>
        @endforeach
    </table>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        
      @endsection