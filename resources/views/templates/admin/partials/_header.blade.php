<header class="main-header">
  <!-- Logo -->
  <a href="../../index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>G</b>TNK</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>GO-</b>TANK</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('images/avatar/'.Auth::user()->avatar)}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{Auth::user()->name}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{asset('images/avatar/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image">

              <p>
                {{Auth::user()->name}}
                <small>Anggota sejak, {{Auth::user()->created_at->format('M, Y')}}</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <!-- <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div> -->
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profil</a>
              </div>
              <div class="pull-right">
                <a href="{{ route('admin.logout') }}"
                   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                class="btn btn-default btn-flat">Keluar</a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
