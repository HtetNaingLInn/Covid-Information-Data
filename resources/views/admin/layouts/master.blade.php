
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  <!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('dist\img\avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-sidebar flex-column">
          <li class="nav-item">
          <a href="{{url('admin/dashboard')}}" class="nav-link">
            <i class="fas fa-tachometer-alt text-warning pr-2"></i>
              <p>Admin Dashboard</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          <a href="" class="nav-link ">
            <i class="fas fa-user-tie text-warning"></i>&nbsp;
              <p>
                Admin Control
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('admin/division')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Division</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{url('admin/city')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Township</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/healthcenter')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Health Center</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('admin/member')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Member</p>
                    </a>
                  </li>

                  @can('isAdmin')
                    
                 
                  <li class="nav-item">
                    <a href="{{url('admin/ngo')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>NGO</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('admin/hospital/division')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Hospital</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('admin/donate')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Donation</p>
                          </a>
                        </li>
                        @endcan
            </ul>
          </li>
          <li class="nav-item">
          <a href="{{url('logout')}}" class="nav-link">
             <div class="fas fa-power-off text-danger"></div>&nbsp;&nbsp;
              
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="col-md-12">
      <p>Covid Data Information Center</p>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
