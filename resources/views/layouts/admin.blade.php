<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>@yield('title') | Sistem Kepegawaian</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('template/docs/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <header class="app-header"><a class="app-header__logo" href="index.html">Simpeg</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>       
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li>
              <a  class="dropdown-item" href="{{url('logout')}}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
            </li>
            <form id="logout-form" action="/logout" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>          
          </ul>
        </li>
      </ul>
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{secure_asset('img/pegawai.png')}}" width="50px" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Jumarno</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview {{ request()->is('agama','negara','darah','keluarga') ? 'is-expanded' : '' }}">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Tabel Master</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('agama') ? 'active' : '' }}" href="{{url('agama')}}"><i class="icon fa fa-circle-o"></i> Agama</a></li>
            <li><a class="treeview-item {{ request()->is('negara') ? 'active' : '' }}" href="{{url('negara')}}"><i class="icon fa fa-circle-o"></i> Kewarganegaraan</a></li>
            <li><a class="treeview-item {{ request()->is('darah') ? 'active' : '' }}" href="{{url('darah')}}"><i class="icon fa fa-circle-o"></i> Golongan Darah</a></li>
            <li><a class="treeview-item {{ request()->is('keluarga') ? 'active' : '' }}" href="{{url('keluarga')}}"><i class="icon fa fa-circle-o"></i> Keluarga</a></li>
          </ul>
        </li>
        <li class="treeview {{ request()->is('pegawai','pegawai/*') ? 'is-expanded' : '' }}">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Pegawai</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ request()->is('pegawai') ? 'active' : '' }}" href="{{url('pegawai')}}"><i class="icon fa fa-circle-o"></i> Data Pegawai</a></li>
            <li><a class="treeview-item {{ request()->is('pegawai/create') ? 'active' : '' }}" href="{{url('pegawai/create')}}" target="" rel="noopener"><i class="icon fa fa-circle-o"></i> Tambah Pegawai</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item {{ request()->is('chart') ? 'active' : '' }}" href="{{url('chart')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Rekap Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{url('pegawai/pdf')}}"><i class="icon fa fa-circle-o"></i> Pegawai</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    @yield('content')
    <script src="{{secure_asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{secure_asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{secure_asset('template/docs/js/bootstrap.min.js') }}"></script>
    <script src="{{secure_asset('template/docs/js/main.js') }}"></script>
    <script src="{{secure_asset('template/docs/js/plugins/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{secure_asset('template/docs/js/plugins/chart.js') }}"></script>
    <link rel="stylesheet" href="{{secure_asset('toast')}}//toastr.min.css">
    <script src="{{secure_asset('toast')}}/toastr.min.js"></script>

    <div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method='post' class="form_modal_hapus" enctype='multipart/form-data'>
            @csrf
            @method('delete')
          <div class="modal-body">
              <div class="modal-body">
                  <p>Apakah anda yakin akan menghapus data ini?</p>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      $(document).on('click', '.btn_modal_hapus', function(){
        let url = $(this).data("url")
        $('#modal_hapus').modal('show')
        $(".form_modal_hapus").attr('action', url);
      })
    </script>
    @yield('script')
    <script>
        if ("{{ Session::get('success') }}") {
            toastr["success"]("{{ Session::get('success') }}")
        }
        if ("{{ Session::get('warning') }}") {
            toastr["warning"]("{{ Session::get('warning') }}")
        }
        if ("{{ Session::get('error') }}") {
            toastr["error"]("{{ Session::get('error') }}")
        }
        
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
  </body>
</html>