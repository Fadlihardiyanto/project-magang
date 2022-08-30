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
      @if (auth()->user()->level == "admin")
        <li class="nav-item has-submenu">
          <a class="nav-link" href="#" aria-expanded="false">
            <span data-feather="database" class="align-text-bottom"></span>
            Data Master  
            <i class="bi small bi-caret-down-fill"></i>
          </a>
          <ul class="submenu collapse {{ Request::is(['dashboard/hotel*','dashboard/jenisroom*','dashboard/pesawat*','dashboard/kereta*','dashboard/travel*', 'dashboard/vendor*','dashboard/kota*','dashboard/unit*']) ? 'show' : '' }}">
            <li><a class="nav-link {{ Request::is('dashboard/hotel*') ? 'active' : '' }}" href="/dashboard/hotel">Hotel</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/jenisroom*') ? 'active' : '' }}" href="/dashboard/jenisroom">Jenis Room Hotel</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/pesawat*') ? 'active' : '' }}" href="/dashboard/pesawat">Pesawat</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/kereta*') ? 'active' : '' }}" href="/dashboard/kereta">Kereta</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/travel*') ? 'active' : '' }}" href="/dashboard/travel">Travel</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/kotatujuan*') ? 'active' : '' }}" href="/dashboard/kotatujuan">Kota Tujuan</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/unitkerja*') ? 'active' : '' }}" href="/dashboard/unitkerja">Unit Kerja</a></li>
          </ul>
        </li>
      @endif
      @if (auth()->user()->level == "admin")
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/anggaran*') ? 'active' : '' }}" href="/dashboard/anggaran">
            <span data-feather="dollar-sign" class="align-text-bottom"></span>
            Anggaran
          </a>
        </li>
      @endif
      @if (auth()->user()->level == "admin")   
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/datanotadinas*') ? 'active' : '' }}" href="/dashboard/datanotadinas">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Data Nota Dinas
          </a>
        </li>
      @endif
      @if (auth()->user()->level == "user")   
      <ul class="nav flex-column">
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#" aria-expanded="false">
                <span data-feather="edit" class="align-text-bottom"></span>
                Nota Dinas
                <i class="bi small bi-caret-down-fill"></i>
            </a>
            <ul class="submenu collapse">
                <li><a href="/dashboard/inputnotadinas" class="nav-link">Input Nota Dinas</a></li>
                <li><a href="/dashboard/datanotadinas" class="nav-link">Data Nota Dinas</a></li>
            </ul>
        </li>
    </ul>
    @endif
    @if (auth()->user()->level == "admin")   
      <li class="nav-item has-submenu">
        <a class="nav-link" href="#" aria-expanded="false">
          <span data-feather="edit" class="align-text-bottom"></span>
            Biaya PD
            <i class="bi small bi-caret-down-fill"></i>
          </a>
          <ul class="submenu collapse {{ Request::is(['dashboard/input_biaya_hotel*', 'dashboard/input_biaya_pesawat*', 'dashboard/input_biaya_kereta*', 'dashboard/input_biaya_travel*', 'dashboard/input_biaya_lain*', 'dashboard/data_biaya_perjalanan_dinas*']) ? 'show' : '' }}">
            <li><a class="nav-link {{ Request::is('dashboard/input_biaya_hotel*') ? 'active' : '' }}" href="/dashboard/input_biaya_hotel">Input Biaya Hotel</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/input_biaya_pesawat*') ? 'active' : '' }}" href="/dashboard/input_biaya_pesawat">Input Biaya Pesawat</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/input_biaya_kereta*') ? 'active' : '' }}" href="/dashboard/input_biaya_kereta">Input Biaya Kereta</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/input_biaya_travel*') ? 'active' : '' }}" href="/dashboard/input_biaya_travel">Input Biaya Travel</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/input_biaya_lain*') ? 'active' : '' }}" href="/dashboard/input_biaya_lain">Input Biaya Lain</a></li>
            <li><a class="nav-link {{ Request::is('dashboard/data_biaya_perjalanan_dinas*') ? 'active' : '' }}" href="/dashboard/data_biaya_perjalanan_dinas">Data Biaya PD</a></li>
          </ul>
      </li>
      @endif

      @if (auth()->user()->level == "admin")   
      <li class="nav-item has-submenu">
        <a class="nav-link" href="#" aria-expanded="false">
          <span data-feather="calendar" class="align-text-bottom"></span>
          Laporan
          <i class="bi small bi-caret-down-fill"></i>
        </a>
        <ul class="submenu collapse {{ Request::is(['dashboard/laporan_anggaran*','dashboard/realisasi_per_tahun*','dashboard/realisasi_per_triwulan*','dashboard/realisasi_per_bulan*','dashboard/realisasi_per_divisi*', 'dashboard/realisasi_hotel_dan_transportasi*']) ? 'show' : '' }}">
          <li><a class="nav-link {{ Request::is('dashboard/laporan_anggaran*') ? 'active' : '' }}" href="/dashboard/laporan_anggaran">Anggaran</a></li>
          <li><a class="nav-link {{ Request::is('dashboard/realisasi_per_tahun*') ? 'active' : '' }}" href="/dashboard/realisasi_per_tahun">Realisasi Per Tahun</a></li>
          <li><a class="nav-link {{ Request::is('dashboard/realisasi_per_triwulan*') ? 'active' : '' }}" href="/dashboard/realisasi_per_triwulan">Realisasi Per Triwulan</a></li>
          <li><a class="nav-link {{ Request::is('dashboard/realisasi_per_bulan*') ? 'active' : '' }}" href="/dashboard/realisasi_per_bulan">Realisasi Per Bulan</a></li>
          <li><a class="nav-link {{ Request::is('dashboard/realisasi_hotel_dan_transportasi*') ? 'active' : '' }}" href="/dashboard/realisasi_hotel_dan_transportasi">Biaya Hotel, Transport & Lain-lain</a></li>
        </ul>
      </li>
      @endif

    </ul>

    @if (auth()->user()->level == "admin")
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
      <span>Menu Khusus</span>
    </h6>
        <ul class="nav flex-column">
          <li class="nav-item has-submenu">
            <a class="nav-link" href="#" aria-expanded="false"><span data-feather="calendar" class="align-text-bottom"></span>
              Khusus
              <i class="bi small bi-caret-down-fill"></i>
            </a>
            <ul class="submenu collapse {{ Request::is(['dashboard/dataGl*','dashboard/laporan_khusus*', 'dashboard/data_biaya_khusus*']) ? 'show' : '' }}">
              <li><a class="nav-link {{ Request::is('dashboard/dataGl') ? 'active' : '' }}" href="/dashboard/dataGl">Data GL</a></li>
              <li><a class="nav-link {{ Request::is('dashboard/data_biaya_khusus') ? 'active' : '' }}" href="/dashboard/data_biaya_khusus">Data Biaya Khusus</a></li>
              <li><a class="nav-link {{ Request::is('dashboard/laporan_khusus') ? 'active' : '' }}" href="/dashboard/laporan_khusus">Laporan</a></li>
            </ul>
          </li>
        </ul>
    @endif

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Manajemen Akun</span>
      </h6>
          <ul class="nav flex-column">
            @if (auth()->user()->level == "admin")    
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/manajemen*') ? 'active' : '' }} " aria-current="page" href="/dashboard/manajemen">
                  <span data-feather="users" class="align-text-bottom"></span>
                  Manajemen Pengguna
                </a>
              </li>
            @endif
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/changepassword*') ? 'active' : '' }}" href="/dashboard/changepassword">
                <span data-feather="lock" class="align-text-bottom"></span>
                Ganti Password
              </a>
            </li>
  </div>
</nav>