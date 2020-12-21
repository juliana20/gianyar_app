
<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>{{config('app.app_name_alias')}}</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="" style="width: 45px;"><b>{{config('app.app_name')}}</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
       
        <ul class="nav navbar-nav">
   
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ url('public/image/user2-160x160.jpg') }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Session::get('username')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ url('public/assets/dist/img/user.png') }}" class="img-circle" alt="User Image">

                <p>
                  <small>{{Session::get('nama_user')}}</small> 
                  <small>{{Session::get('jabatan')}}</small>
                  
                </p>
              </li>
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="{{url('/Akun/'.Session::get('id'))}}" class="btn btn-default btn-flat">Akun</a>
                </div> -->
                <div class="pull-right">
                  <a href="{{url('/Logout')}}" class="btn btn-default btn-flat">Keluar</a>

                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="" title="Keluar" data-toggle="modal" data-target="#modalLogout" data-id="{!! Session::get('id') !!}" ><i class="fa fa-power-off" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- MODAL LOGOUT -->
  @include('modal.header.modal_logout')