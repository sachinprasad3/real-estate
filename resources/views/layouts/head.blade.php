<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Branding Image -->
  <a class="navbar-brand " href="{{ url('/home') }}" style="color:red">
      {{ config('app.name', 'Sachin') }}
  </a>

  <button class="navbar-toggler"
  type="button"
  data-toggle="collapse"
  data-target="#app-navbar-collapse"
  >

    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
          &nbsp;
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else

          <li ><a href="{{ route('login') }}">Home</a></li>
          <li><a href="{{ route('register') }}">About</a></li>
          <li><a href=" {{URL::to('/contact')}} ">Contact</a></li>


              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
      </ul>
  </div>
</nav>
