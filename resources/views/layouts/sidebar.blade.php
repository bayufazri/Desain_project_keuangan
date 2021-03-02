      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Keuangan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Ku</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link"><i class="fa fa-book"></i><span>Data Master</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fa fa-users"></i> <span>Data Peserta Didik</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('student') }}">Data Siswa</a></li>
                <li><a href="{{ url('parent') }}">Data Orangtua Siswa</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="{{ url('payment') }}" class="nav-link"><i class="fa fa-donate"></i> <span>Jenis Pembayaran</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="{{ url('rombel') }}" class="nav-link"><i class="fa fa-user-graduate"></i> <span>Data Rombel</span></a>
            </li>
             <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fa fa-clipboard"></i> <span>Rayon</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('rayon') }}">Data Rayon</a></li>
                <li><a href="{{ url('teacher') }}">Data Pembimbing Siswa</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>