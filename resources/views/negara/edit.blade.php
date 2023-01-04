@section('title')
Edit Negara
@endsection
@section('master')
active
@endsection
@extends('layouts.admin')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Negara</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="/negara">Kewarganegaraan</a></li>
          <li class="breadcrumb-item"><a href="#">Edit Negara</a></li>
        </ul>
      </div>
      
      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->            
            <div class="tile-body">
              <!-- <form class="form-horizontal" action="{{route('pegawai.store')}}" method="post"> -->
              <form class="form-horizontal" action="{{route('negara.update', $negara->id_ngr)}}" method="post">
                {{ csrf_field()}} 
                {{ method_field('PUT')}} 
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama Negara</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" value="{{$negara->nm_negara}}" name="nm_negara">
                  </div>

              </div>

            <div class="tile-footer">
              <div class="row">              
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                  <a class="btn btn-secondary" href="/negara"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>        
                
              </div>
              </form>
            </div>

          </div>
        </div>               
      </div>
    </main>

@endsection