@extends('layouts.admin')
@section('title')
Pelatihan
@endsection
@section('pegawai')
active
@endsection
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Pelatihan</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">...</li>
          <li class="breadcrumb-item"><a href="/pegawai/{{$pegawai->id}}">Detail Pegawai</a></li>
          <li class="breadcrumb-item"><a href="/pegawai/{{$pegawai->id}}/pelatihan">Pelatihan</a></li>
        </ul>
      </div>

      <div class="row">        
        <div class="col-md-12">
          <div class="tile">                       
            <div class="form-group col-md 8">              
              <a href="{{url('pegawai/pelatihan/'.$pegawai->id)}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Pelatihan</span></a>
            </div>
            
            <table class="table table-stripped table-hover">
              <thead>
                <th>Tanggal Pelatihan</th>
                <th>Topik Pelatihan</th>        
                <th>Operasi</th>                       
              </thead>
              <tbody>
              @foreach($pegawai->pelatihan as $pelatihan)
                <tr>            
                  <td>{{$pelatihan->tgl_pelatihan}}</td>  
                  <td>{{$pelatihan->topik_pelatihan}}</td>
                  <td><a href="{{route('pelatihan.edit', $pelatihan->id)}}"><button class="btn btn-warning fa fa-edit" type="submit"> Edit</button></a></td>
                  <td>
                    <button class="btn btn-danger fa fa-trash btn_modal_hapus" data-url="{{route('pelatihan.destroy', $pelatihan->id)}}" type="button" > Hapus</button>
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
         

