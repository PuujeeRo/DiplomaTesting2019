

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Go Fund</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>Menu</button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a href="/" class="nav-link">Нүүр</a></li>
          <li class="nav-item {{Request::is('news') ? 'active' : ''}}"><a href="/news" class="nav-link">Мэдээ</a></li>
          <li class="nav-item {{Request::is('about') ? 'active' : ''}}"><a href="/about" class="nav-link">Тухай</a></li>
          <li class="nav-item {{Request::is('contact') ? 'active' : ''}}"><a href="/contact" class="nav-link">Холбоо барих</a></li>
          <li class="nav-item {{Request::is('stats') ? 'active' : ''}}"><a href="/stats" class="nav-link">Статистик</a></li>
          @guest
          @if (Route::has('register'))
          <li class="nav-item {{Request::is('login') ? 'active' : ''}}"><a href="/login" class="nav-link">Нэвтрэх</a></li>
          @endif
          @else
          <li class="nav-item {{Request::is('login') ? 'active' : ''}}"><a href="/profile" class="nav-link"><span class="icon-person"></span></a></li>
          <li class="class="nav-item dropdown>
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @if (Auth::user()->is_admin)
              <a class="dropdown-item" href="/dashboard" >{{ __('Хянах самбар') }}</a>
              @endif
              <a class="dropdown-item" href="/profile" >{{ __('Профайл') }}</a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Гарах') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->