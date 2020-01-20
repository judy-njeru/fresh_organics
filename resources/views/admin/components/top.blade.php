<nav class="navbar navbar-default admin-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="main-color">Dashboard</span></a>

      @if(Auth::guard('admin')->check())
      <li class="nav-item dropdown">
        <a id="adminDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::guard('admin')->user()->name }} (ADMIN) <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">
          <ul>

            <li class="profile-img">
              <img src="https://icon-library.net/images/avatar-icon-images/avatar-icon-images-4.jpg" class="profile-img">
              <div class="profile-body">
                <h5>Admin</h5>
                <h6>admin@admin.com</h6>
              </div>
            </li>
            <li class="profile">
              <a href="/admin/profile">
                <i class="fa fa-user fa-2x"></i>
                Profile
              </a>
            </li>

            <li>
              <a href="/admin">
                <i class="fa fa-home fa-2x"></i>
                Home
              </a>
            </li>
            <li>
              <form action="{{ route('admin.logout') }}" method="GET">
                @csrf
                <button class="btn btn-danger btn-block">
                  <i class="voyager-power"></i>
                  Logout
                </button>
              </form>
            </li>


          </ul>

        </div>
      </li>
      @endif
    </div>
  </div>
</nav>