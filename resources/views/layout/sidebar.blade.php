<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="nav-small-cap"><span class="hide-menu">Dashboard</span></li>
        <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" 
          href="{{url('/rekapitulasi')}}"
          aria-expanded="false">
          <i class="fas fa-chart-area"></i>
          <span class="hide-menu">
              Rekapitulasi</span></a>
        </li>
        <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" 
          href="{{url('/produktivitas')}}"
          aria-expanded="false">
          <i class="fas fa-newspaper"></i>
          <span class="hide-menu">
              Produktivitas</span></a>
        </li>
        <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" 
          href="{{url('/kebutuhan-alat')}}"
          aria-expanded="false">
          <i class="fas fa-database"></i>
          <span class="hide-menu">
              Kebutuhan Alat</span></a>
        </li>
        <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" 
          href="{{url('/biaya-operasional')}}"
          aria-expanded="false">
          <i class="far fa-money-bill-alt"></i>
          <span class="hide-menu">
              Biaya Operasional</span></a>
        </li>
        <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" 
          href="{{url('/biaya-sewa')}}"
          aria-expanded="false">
          <i class="fas fa-money-bill-alt"></i>
          <span class="hide-menu">
              Biaya sewa</span></a>
        </li>
        <li class="nav-small-cap"><span class="hide-menu">Master</span></li>
        <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" 
          href="{{url('/admin')}}"
          aria-expanded="false">
          <i class="fas fa-users"></i>
          <span class="hide-menu">
              Alat Berat</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
          aria-expanded="false"><i class="fas fa-bars"></i><span
          class="hide-menu">Kategori</a>
          <ul aria-expanded="false" class="collapse first-level base-level-line">
            <li class="sidebar-item"><a  href="{{url('/kategori-biaya-operasional')}}" class="sidebar-link"><span
              class="hide-menu"> Biaya Operasional</span></a>
            </li>
            <li class="sidebar-item"><a  href="{{url('/kategori-biaya-sewa')}}" class="sidebar-link"><span
              class="hide-menu"> Biaya Sewa</span></a>
            </li>
            <li class="sidebar-item"><a  href="{{url('/kategori-produktivitas')}}" class="sidebar-link"><span
              class="hide-menu">Produktivitas</span></a></li>
          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow"  href="{{url('/admin')}}"
          aria-expanded="false"><i class="fas fa-cube"></i><span
          class="hide-menu">Parameter</a>
          <ul aria-expanded="false" class="collapse first-level base-level-line">
            <li class="sidebar-item"><a  href="{{url('/parameter-produktivitas')}}" class="sidebar-link"><span
              class="hide-menu"> Produktivitas</span></a>
            </li>
            <li class="sidebar-item"><a  href="{{url('/parameter-kebutuhan-alat')}}" class="sidebar-link"><span
              class="hide-menu"> Kebutuhan Alat</span></a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item"> 
          <a class="sidebar-link sidebar-link" 
          href="{{url('/admin')}}"
          aria-expanded="false">
          <i class="fas fa-users"></i>
          <span class="hide-menu">
              Admin</span></a>
        </li>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
