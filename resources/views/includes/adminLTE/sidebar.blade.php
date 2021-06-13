<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('assets/AdminLTE/index3.html')}}" class="brand-link">
      <img src="{{asset('assets/AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SKP UNS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Menu Utama</li>
          <li class="nav-item @yield('berandaActive')">
            <a href="{{url('/home')}}" class="nav-link">
              <i class="fas fa-home nav-icon"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          @can('are-admin')
            <li class="nav-header">Menu Khusus Admin</li>
            <li class="nav-item @yield('manajemenAkunActive')">
              <a href="{{url('/admin/manajemen-akun')}}" class="nav-link">
                <i class="fas fa-user-cog nav-icon"></i>
                <p>
                  Manajemen Akun
                </p>
              </a>
            </li>
            <li class="nav-item @yield('manajemenPegawaiActive')">
              <a href="{{url('/admin/manajemen-pegawai')}}" class="nav-link">
               <i class="fas fa-address-card nav-icon"></i>
                <p>
                  Manajemen Pegawai
                </p>
              </a>
            </li>
            <li class="nav-item @yield('manajemenUraianPekerjaanActive')">
              <a href="{{url('/admin/manajemen-uraian-pekerjaan')}}" class="nav-link">
                <i class="fas fa-user-tag nav-icon"></i>                
                <p>
                  Manajemen Uraian Pekerjaan
                </p>
              </a>
            </li>
            <li class="nav-item @yield('manajemenUraianPekerjaanJabatanActive')">
              <a href="{{url('/admin/manajemen-uraian-pekerjaan-jabatan')}}" class="nav-link">
                <i class="fas fa-user-tag nav-icon"></i>                
                <p>
                  Manajemen Uraian Pekerjaan Jabatan
                </p>
              </a>
            </li>
            
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>