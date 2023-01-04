@extends('layouts.admin')
@section('title')
Pendidikan
@endsection
@section('pegawai')
active
@endsection
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Pendidikan</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">...</li>
          <li class="breadcrumb-item"><a href="/pegawai/{{$pegawai->id}}">Detail Pegawai</a></li>
          <li class="breadcrumb-item"><a href="/pegawai/{{$pegawai->id}}/pelatihan">Pendidikan</a></li>
        </ul>
      </div>

      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <div class="form-group col-md 8">              
              <a href="{{url('pegawai/pendidikan/'.$pegawai->id)}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Pendidikan</span></a>
            </div>                       
            
    <table class="table table-stripped table-hover">
    <thead>
        <th>Tahun Pendidikan</th>
        <th>Data Pendidikan</th>        
        <th>Operasi</th>                       
    </thead>
    <tbody>
    @foreach($pegawai->pendidikan as $pendidikan)
        <tr>            
            <td>{{$pendidikan->t_pdk}}</td>  
            <td>{{$pendidikan->d_pdk}}</td>                         
            <!-- <td><a href=""><input type="submit" class="btn btn-warning fa fa-edit"> Edit</a></td> -->
            <td><a href="{{route('pendidikan.edit', $pendidikan->id)}}"><button class="btn btn-warning fa fa-edit"> Edit</button></a></td>
            <td>
              <button class="btn btn-danger fa fa-trash btn_modal_hapus" data-url="{{route('pendidikan.destroy', $pendidikan->id)}}" type="button" >Hapus</button>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>           
           
          </div>
        </div>              
      </div>
</main>
@endsection
         

