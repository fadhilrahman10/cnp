  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: 0.8" />
          <span class="brand-text font-weight-light">C&P</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview">
                      <a href="{{ route('user.index') }}" class="nav-link {{ request()->is('user') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('user.show', request()->session()->get('user')) }}" class="nav-link">
                          <i class="nav-icon ion-person"></i>
                          <p>Biodata</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('user.create') }}" class="nav-link">
                          <i class="nav-icon far fa-file-alt text-md"></i>
                          <p>Upload Berkas</p>
                      </a>
                  </li>
                  {{-- <li class="nav-item">
                      <a href="{{ route('user.show', 'user') }}" class="nav-link">
                          <i class="nav-icon far fa-file-alt text-md"></i>
                          <p>Review</p>
                      </a>
                  </li> --}}
                  {{-- <li class="nav-item">
                <a href="change-password.html" class="nav-link">
                  <i class="nav-icon far fa-eye text-md"></i>
                  <p>Ganti Password</p>
                </a>
              </li> --}}
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
