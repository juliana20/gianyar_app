<section class="sidebar">
  <div class="user-panel" style="border: 0px solid #ddd;background-color: #0e1315">
    <div class="pull-left image">
      <img src="{{ url('public/image/user2-160x160.jpg') }}" class="img-circle" alt="User Image" >
    </div>
    <div class="pull-left info">
      <p></p>
      <a href="#"><i class="fa fa-circle text-success"></i> {{Session::get('username')}}</a>
    </div>
  </div>
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ Request::is('dashboard')?'active':null}}">
              <a href="{{url('/dashboard')}}"><i class="fa fa-university"></i><span> Dashboard</span></a>
            </li>
            <li class="{{ Request::is('user') ? 'active':null}}">
              <a href="{{url('/penerima_bantuan')}}"><i class="fa fa-user"></i> <span>Penerima Bantuan</span></a>
          </li>
    </ul>
      <!-- /.sidebar-menu -->
</section>