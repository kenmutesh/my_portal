  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ env('APP_NAME')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if (Auth::user()->hasRole('super_admin'))
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Super admin
              </p>
            </a>
          </li>
          @elseif (Auth::user()->hasRole('admin'))
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               admin
              </p>
            </a>
          </li>
          @else (Auth::user()->hasRole('user'))
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                user
              </p>
            </a>
          </li>
          @endif

          <li class="nav-item menu-open">
            <a href="/settings" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage users
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          
      
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  