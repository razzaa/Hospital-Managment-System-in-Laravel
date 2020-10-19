
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Medlog</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
</head>
<style>
.fordisplayuser{
  margin-right:30px;
  margin-left:30px;
  font-size: 12px;
  text:italic;
}
.elementuser{

  font-size: 15px;
}
</style>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('dashboard')}}" class="nav-link">Home</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('contact')}}" class="nav-link">Contact</a>
      </li> -->
      
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
   </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="/img/{{Auth::user()->avatar}}" alt="profile_picture"  class="img-circle elevation-2">

          <!-- <img src="/dist/img/user2-160x160.jpg"  alt="User Image"> -->
        </div>
        <div class="info">
          <a href="{{ url('/displayuserprofile') }}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview menu-open"> -->
      
         
         
        
           
      
          <!-- <li class="nav-header">EXAMPLES</li> -->
          <li class="nav-item has-treeview ">
          <a href="{{route('dashboard')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            <li class="nav-item has-treeview">
              <a href="{{url('admin_doctor_show')}}" class="nav-link">
              <i class="nav-icon fa fa-user-md fa-edit"></i>
              <p>
                Doctor
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('admin_patient_show')}}" class="nav-link">
              <i class="nav-icon fa fa-wheelchair	 fa-edit"></i>
              <p>
                Patient
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('admin_nurse_show')}}" class="nav-link">
              <i class="nav-icon fa fa-plus-square	 fa-edit"></i>
              <p>
                Nurse
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('admin_accountant_show')}}" class="nav-link">
              <i class="nav-icon fas fa-money-bill-alt	 fa-edit"></i>
              <p>
                Accountant
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="{{action('AdminController@index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Register User
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="{{url('admin_bedward_show')}}" class="nav-link">
              <i class="nav-icon fas fa-bed"></i>
              <p>
              Bedward
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="{{url('admin_appointment_show')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-check"></i>
              <p>
              Appointment
              </p>
            </a>
            </li>

            <li class="nav-item has-treeview">
            <a href="{{url('admin_invoice_show')}}" class="nav-link">
              <i class="nav-icon far fa-money-bill-alt"></i>
              <p>
              Invoice
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="{{url('admin_payment_show')}}" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
              Payment
              </p>
            </a>
            </li>
          <li class="nav-item has-treeview">
            
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <!-- <li class="nav-item">
                  <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Invoice</p>
                  </a>
                </li> -->
              <li class="nav-item">
                <a href="{{ url('/displayuserprofile') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('profilepicture')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Picture</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AdminProfileUpdate')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            </li>
            <li class="nav-item">
            <a href="{{url('admin_blood_bank')}}" class="nav-link">
              <i class="nav-icon fa fa-medkit"></i>
              <p>
                Blood Bank
            
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{url('noticeboard')}}" class="nav-link">
              <i class="nav-icon fa fa-columns"></i>
              <p>
                Notice Board
            
              </p>
            </a>
            </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-history"></i>
              <p>
                History
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{action('AdminHistoryController@index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register History</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{ route('password.request') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('changepassword')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <!-- <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a> -->
                <li class="nav-item dropdown">
                                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->

                                <div   href="#" role="button"  class="nav-item" >
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                      <i class="far fa-circle nav-icon"></i>
                  <p> {{ __('Logout') }}</p>
                                       
                                    </a>
                                    <!-- <a class="dropdown-item" href="{{ route('changepassword') }}" >Change Password</a> -->
                                     
                                  

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
              </li>
            </ul>
          </li>
     
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">Admin Dashboard</h3>
          </div><!-- /.col -->
          <div class="col-sm-6 text-center"  >
         
          <div class="float-right fordisplayuser "> 
          Nurse <div class="elementuser" style="color:green;"> {{$nurkey}}</div>
          </div>
          <div class="float-right fordisplayuser"> 
          Patient <div class="elementuser" style="color:red;">{{$patkey}}</div>
          </div>
          <div class="float-right fordisplayuser"> 
          Doctor <div class="elementuser" style="color:green;">{{$dockey}}</div>
          </div>
          <div class="float-right fordisplayuser"> 
          Request <div class="elementuser" style="color:orange;">{{$requestkey}}</div>
          </div>
          </div><!-- /.col -->
       
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="background:white;">
    @yield('masterfile')
    </div>
    </div>

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="http://razablog.com">MEDLOG</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<script src="/dist/js/demo.js"></script>
<script src="/dist/js/pages/dashboard3.js"></script>
</body>
</html>
