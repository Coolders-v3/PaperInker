<div class="container-header-logo">
  <nav class="navbar navbar-expand-md navbar-light shadow-sm ">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img class="logo-user-component" src="{{ asset('images/logo-user.png') }}" alt="logo-user">
    </a>
    <ul class="navbar-nav ml-auto">
      @guest
      @else

        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>

        </li>
      @endguest
    </ul>
  </nav>
</div>
