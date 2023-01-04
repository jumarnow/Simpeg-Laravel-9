@section('title')
Master Kewarganegaraan
@endsection
@section('master')
active
@endsection
@extends('layouts.admin')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Master Kewarganegaraan</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="#">Kewarganegaraan</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
              <div class="form-group col-md 8">              
              <a href="{{route('negara.create')}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Negara</span></a>
              </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Negara</th>                      
                      <th>Operasi</th>                      
                    </tr>
                  </thead>
                  <tbody>
                  @php
                  $no_urut=1;
                  @endphp
                    @foreach($negara as $tampil)
                    <tr>
                      <td>{{$no_urut++}}</td>
                      <td>{{$tampil->nm_negara}}</td>                     
                      <td>
                        <a href="{{route('negara.edit', $tampil->id_ngr)}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)"> Edit</span></a>

                      </td>
                      <td>
                        <button class="btn btn-danger btn_modal_hapus" data-url="{{route('negara.destroy', $tampil->id_ngr)}}" type="button" ><span class="fa fa-trash"> Hapus</span></button>
                      </td>
                      
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>           
          

            </div>            
          </div>
        </div>
        <div class="row">      
          
        </div>
      </div>
    </main>
@endsection