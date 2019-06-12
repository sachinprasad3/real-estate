
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('home')}}" class="brand-link">

    <span class="brand-text font-weight-light">Seller Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">

      </div>
      <div class="info">
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
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Dashboard
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="{{ route('addClient.show') }}" class="nav-link active">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Add Client</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('user.create')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Register User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('user.index')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>View Users</p>
              </a>
            </li> -->



            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Post Land</p>
              </a>
            </li>

          </ul>
        </li> -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-envelope-o"></i>
            <p>
              Post
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('seller_post.create')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Add New Posts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('seller_post.index')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>View Posts</p>
              </a>
            </li>
          </ul>
        </li>



        <li class="nav-header">LABELS</li>
        <li class="nav-item">

          <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       <i class="nav-icon fa fa-circle-o text-danger"></i>
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>

    <!--      <a href="#" class="nav-link">
            <i class="nav-icon fa fa-circle-o text-danger"></i>
            <p class="text">log out</p>
          </a> -->
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
