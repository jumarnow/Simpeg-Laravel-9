@section('title')
Tambah Pendidikan
@endsection
@section('pegawai')
active
@endsection
@extends('layouts.admin')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Pendidikan</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">...</li>
          <li class="breadcrumb-item"><a href="/pegawai/{{$pegawai->id}}">Detail Pegawai</a></li>
          <li class="breadcrumb-item"><a href="/pegawai/{{$pegawai->id}}/pendidikan">Pendidikan</a></li>
          <li class="breadcrumb-item"><a href="#">Tambah Pendidikan</a></li>
        </ul>
      </div>
      
      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">              
              <form class="form-horizontal" action="{{url('/pendidikan')}}" method="post">
                {{ csrf_field()}} 
                <div class="form-group row">
                  <label class="control-label col-md-3">Tahun Pendidikan</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="t_pdk">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Data Pendidikan</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="d_pdk">
                  </div>
                </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="pegawai_id" value="{{$pegawai->id}}">
                
            <div class="tile-footer">
              <div class="row">              
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="/pegawai/{{$pegawai->id}}/pendidikan"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>                    
              </div>
              </form>
            </div>
          </div>
        </div>               
      </div>
    </main>

@endsection