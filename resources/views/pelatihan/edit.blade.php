@section('title')
Edit Pelatihan
@endsection
@section('pegawai')
active
@endsection
@extends('layouts.admin')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Pelatihan</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">...</li>
          <li class="breadcrumb-item"><a href="#">Detail Pegawai</a></li>
          <li class="breadcrumb-item"><a href="#">Pelatihan</a></li>
          <li class="breadcrumb-item"><a href="#">Edit Pelatihan</a></li>
        </ul>
      </div>
      
      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">              
              <form class="form-horizontal" action="{{route('pelatihan.update', $pelatihan->id)}}" method="post">
                {{ csrf_field()}} 
                {{method_field('PUT')}}
                <div class="form-group row">
                  <label class="control-label col-md-3">Tanggal Pelatihan</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" value="{{$pelatihan->tgl_pelatihan}}" type="date" name="tgl_pelatihan">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Topik Pelatihan</label>
                  <div class="col-md-8">
                    <textarea name="topik_pelatihan" class="form-control" cols="30" rows="3">{{$pelatihan->topik_pelatihan}}</textarea>
                  </div>
                </div>
                </div>
                <input type="hidden" name="pegawai_id" value="{{$pelatihan->pegawai_id}}">
            <div class="tile-footer">
              <div class="row">              
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                  <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>                    
              </div>
              </form>
            </div>
          </div>
        </div>               
      </div>
    </main>

@endsection