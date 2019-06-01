  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/profile" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Миний профайл</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation" style="background-color: #232323 !important;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu" style="background-color: #222d32">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image"> -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Нэвтэрсэн : {{ Auth::user()->username }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" style="opacity: 0.7;">
              <li class="dropdown-item">
               @if (Auth::guest())
                  <div class="dropdown-item">
                    <a href="{{ route('login') }}" class="btn btn-primary">Нэвтрэх</a>
                  </div>
               @else
                    @if (Auth::user()->is_admin)
                      <div class="dropdown-item">
                        <a href="{{ url('dashboard') }}" class="btn btn-primary" style="border-radius: 0px; width: 100%;">Хянах самбар</a>
                      </div>
                    @endif
                 <div class="dropdown-item">
                    <a href="{{ url('profile') }}" class="btn btn-primary" style="border-radius: 0px; width: 100%;">Профайл</a>
                  </div>
                 <div class="dropdown-item">
                    <a class="btn btn-danger"  href="{{ route('logout') }}" style="border-radius: 0px; width: 100%;" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Системээс гарах</a>
                 </div>
                @endif
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
   </form>