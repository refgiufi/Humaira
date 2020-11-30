<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('argon/assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" href="{{url('/')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('sumber-pemasukan')}}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Manage Sumber Pemasukan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('pemasukan')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Manage Pemasukan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('pengeluaran')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Manage Pengeluaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('laporan-keuangan')}}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Laporan Keuangan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('keluar')}}">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Sign Out</span>
              </a>
            </li>
          </ul>
          </ul>
        </div>
      </div>
    </div>
  </nav>