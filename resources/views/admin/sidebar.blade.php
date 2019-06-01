  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >

      <!-- Sidebar user panel (optional)  -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>    -->
          <!-- Status -->
      <!--    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      -->
      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="{{Request::is('dashboard') ? 'active' : ''}}"><a href="/dashboard"><i class="fa fa-link"></i> <span>Хянах самбар</span></a></li>
        <li class=""><a href="{{ url('/') }}"><i class="fa fa-link"></i> <span>Сайтын нүүр</span></a></li>
        <li class="{{Request::is('profile') ? 'active' : ''}}"><a href="{{ url('/profile') }}"><i class="fa fa-link"></i> <span>Миний профайл</span></a></li>
        <li class="{{Request::is('projects-management') ? 'active' : ''}}"><a href="{{ url('projects-management') }}"><i class="fa fa-link"></i> <span>Төслийн удирлага</span></a></li>
        <li class="{{Request::is('projects-management') ? 'active' : ''}}"><a href="{{ url('projects-management') }}"><i class="fa fa-link"></i> <span>Төслийн анализ</span></a></li>
        <li class="{{Request::is('admin-management') ? 'active' : ''}}"><a href="{{ route('admin-management.index') }}">
          <i class="fa fa-link"></i> <span>Админ удирдлага</span></a></li>
        <li class="{{Request::is('user-management') ? 'active' : ''}}"><a href="{{ route('user-management.index') }}">
          <i class="fa fa-link"></i> <span>Хэрэглэгчийн удирдлага</span></a></li>
        <li class=""><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out"></i><span>Системээс гарах</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>