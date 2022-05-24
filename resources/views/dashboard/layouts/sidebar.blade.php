<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar h-100 overflow-auto collapse">
    <div class="position-sticky pt-3">
      <div class="d-flex justify-content-center">
      <img src="/images/jm_logo.png" alt="" width="100px" height="100px">
      </div>
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
      <span>Menu Utama</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item has-submenu">
          <a class="nav-link" href="#" aria-expanded="false">
            <span data-feather="database" class="align-text-bottom"></span>
            Data Master  
            <i class="bi small bi-caret-down-fill"></i>
          </a>
          <ul class="submenu collapse">
            <li><a class="nav-link" href="#">Hotel</a></li>
            <li><a class="nav-link" href="#">Jenis Room Hotel</a></li>
            <li><a class="nav-link" href="#">Pesawat</a></li>
            <li><a class="nav-link" href="#">Kereta</a></li>
            <li><a class="nav-link" href="#">Travel</a></li>
            <li><a class="nav-link" href="#">Vendor</a></li>
            <li><a class="nav-link" href="#">Kota Tujuan</a></li>
            <li><a class="nav-link" href="#">Divisi Tambahan</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="dollar-sign" class="align-text-bottom"></span>
            Anggaran
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Data Nota Dinas
          </a>
        </li>
        <li class="nav-item has-submenu">
          <a class="nav-link" href="#" aria-expanded="false">
            <span data-feather="edit" class="align-text-bottom"></span>
              Biaya PD
              <i class="bi small bi-caret-down-fill"></i>
            </a>
            <ul class="submenu collapse">
              <li><a class="nav-link" href="#">Input Biaya Hotel</a></li>
              <li><a class="nav-link" href="#">Input Biaya Pesawat</a></li>
              <li><a class="nav-link" href="#">Input Biaya Kereta</a></li>
              <li><a class="nav-link" href="#">Input Biaya Travel</a></li>
              <li><a class="nav-link" href="#">Input Biaya Lain</a></li>
              <li><a class="nav-link" href="#">Data Biaya PD</a></li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
          <a class="nav-link" href="#" aria-expanded="false">
            <span data-feather="calendar" class="align-text-bottom"></span>
            Laporan
            <i class="bi small bi-caret-down-fill"></i>
          </a>
          <ul class="submenu collapse">
            <li><a class="nav-link" href="#">Anggaran</a></li>
            <li><a class="nav-link" href="#">Realisasi Per Tahun</a></li>
            <li><a class="nav-link" href="#">Realisasi Per Triwulan</a></li>
            <li><a class="nav-link" href="#">Realisasi Per Bulan</a></li>
            <li><a class="nav-link" href="#">Realisasi Per Divisi</a></li>
            <li><a class="nav-link" href="#">Biaya Hotel, Transport & Lain-lain</a></li>
          </ul>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Menu Khusus</span>
        </h6>
          <ul class="nav flex-column">
            <li class="nav-item has-submenu">
              <a class="nav-link" href="#" aria-expanded="false"><span data-feather="calendar" class="align-text-bottom"></span>
                Khusus
                <i class="bi small bi-caret-down-fill"></i>
              </a>
              <ul class="submenu collapse">
                <li><a class="nav-link" href="#">Data GL</a></li>
                <li><a class="nav-link" href="#">Data Biaya Khusus</a></li>
                <li><a class="nav-link" href="#">Laporan</a></li>
              </ul>
            </li>
          </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Manajemen Akun</span>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/manajemen') ? 'active' : '' }} " aria-current="page" href="/dashboard/manajemen">
                  <span data-feather="users" class="align-text-bottom"></span>
                  Manajemen Pengguna
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="lock" class="align-text-bottom"></span>
                  Ganti Password
                </a>
              </li>
    </div>
  </nav>