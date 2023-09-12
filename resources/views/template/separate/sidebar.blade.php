<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <!-- <span class="brand-text font-weight-light">Perpustakaan</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">Perpustakaan</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="{{ route('anggota') }}" class="nav-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Anggota
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('buku') }}" class="nav-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Buku
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('petugas') }}" class="nav-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Petugas
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('rak') }}" class="nav-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Rak
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('peminjaman') }}" class="nav-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Peminjamanan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('pengembalian') }}" class="nav-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pengambilan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>  
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>