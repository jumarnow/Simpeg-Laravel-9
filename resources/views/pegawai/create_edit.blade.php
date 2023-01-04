@extends('layouts.admin')
@section('title')
{{ isset($pegawai) ? 'Edit' : 'Tambah' }} Pegawai
@endsection
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> {{ isset($pegawai) ? 'Edit' : 'Tambah' }} Pegawai</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="#">{{ isset($pegawai) ? 'Edit' : 'Tambah' }} Pegawai</a></li>
        </ul>
      </div>

      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            @if (isset($pegawai))
            <form class="form-horizontal" action="{{route('pegawai.update', $pegawai->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            @else
            <form class="form-horizontal" action="{{route('pegawai.store')}}" method="post">
            {{csrf_field()}}
            @endif
            @php
                // dd($pegawai)
            @endphp
                <div class="form-group row">
                    <label class="control-label col-md-3">NIP</label>
                    <div class="col-md-8">
                      <input required class="form-control col-md-8" type="number" name="nip" value="{{isset($pegawai) ? $pegawai->nip : ''}}">
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama</label>
                  <div class="col-md-8">
                    <input required class="form-control" type="text" name="nama" value="{{isset($pegawai) ? $pegawai->nama : ''}}">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Tempat Lahir</label>
                    <div class="col-md-8">
                      <input required class="form-control col-md-8" type="text" name="tmpt_lahir" value="{{isset($pegawai) ? $pegawai->tmpt_lahir : ''}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Tanggal Lahir</label>
                    <div class="col-md-8">
                        <input required class="form-control col-md-8" type="date" name="tgl_lahir" value="{{isset($pegawai) ? $pegawai->tgl_lahir : ''}}">
                    </div>
                </div>                                
                <div class="form-group row">
                  <label class="control-label col-md-3">Alamat</label>
                  <div class="col-md-8">
                    <textarea required class="form-control" rows="4" name="alamat">{{isset($pegawai) ? $pegawai->alamat : ''}}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Jenis Kelamin</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input required class="form-check-input" type="radio" class="sr-only" name="jenis_kelamin" value="Laki-laki" {{isset($pegawai) && $pegawai->jenis_kelamin == 'Laki-laki' ? 'checked' : ''}}>Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input required class="form-check-input" type="radio" class="sr-only" name="jenis_kelamin" value="Perempuan" {{isset($pegawai) && $pegawai->jenis_kelamin  == 'Perempuan' ? 'checked' : ''}}>Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Agama</label>
                    <div class="col-md-8">
                        <select class="form-control" name="agama_id" id="exampleSelect1">
                          <option value="">Pilih Agama</option>
                            @foreach($agama as $tampil)
                            <option @if(isset($pegawai) && $pegawai->agama_id == $tampil->id_agm) selected @endif value="{{$tampil->id_agm}}">{{$tampil->nmagama}}</option> 
                            @endforeach                           
                        </select>
                    </div>                    
                </div>  
                
                <div class="form-group row">
                  <label class="control-label col-md-3">Kewarganegaraan</label>
                    <div class="col-md-8">
                        <select class="form-control" name="negara_id" id="exampleSelect1">
                          <option value="">Pilih Negara</option>
                            @foreach($negara as $tampil)
                            <option @if(isset($pegawai) && $pegawai->negara_id == $tampil->id_ngr) selected @endif value="{{$tampil->id_ngr}}">{{$tampil->nm_negara}}</option> 
                            @endforeach                           
                        </select>
                    </div>                    
                </div>  
                
                <div class="form-group row">
                  <label class="control-label col-md-3">Golongan Darah</label>
                    <div class="col-md-8">
                        <select class="form-control" name="gol_darah_id" id="exampleSelect1">
                          <option value="">Pilih Golongan Darah</option>
                            @foreach($darah as $tampil)
                            <option @if(isset($pegawai) && $pegawai->gol_darah_id == $tampil->id_darah) selected @endif value="{{$tampil->id_darah}}">{{$tampil->nama_gol_darah}}</option> 
                            @endforeach                           
                        </select>
                    </div>                    
                </div>  
                <div class="form-group row">
                  <label class="control-label col-md-3">Status</label>
                    <div class="col-md-8">
                        <select class="form-control" name="skeluarga_id" id="exampleSelect1">
                          <option value="">Pilih Status Keluarga</option>
                            @foreach($keluarga as $tampil)
                            <option @if(isset($pegawai) && $pegawai->gol_darah_id == $tampil->kdstatusk) selected @endif value="{{$tampil->kdstatusk}}">{{$tampil->nmstatusk}}</option> 
                            @endforeach                           
                        </select>
                    </div>                    
                </div>  
                <div class="form-group row">
                  <label class="control-label col-md-3">Foto</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="file" name="foto" value="{{isset($pegawai) ? $pegawai->foto : ''}}">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Nomor HP</label>
                    <div class="col-md-8">
                      <input required class="form-control" type="text" name="nohp" value="{{isset($pegawai) ? $pegawai->nohp : ''}}">
                    </div>
                </div>
                
              
            </div>

            <div class="tile-footer">
              <div class="row">              
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>        
                
              </div>
              
            </div>
              </form>
          </div>
        </div>              
      </div>
</main>
@endsection
