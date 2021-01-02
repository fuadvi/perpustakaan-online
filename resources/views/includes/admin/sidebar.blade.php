    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Perputakaan Online</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
    
      <!-- Nav Item - Kategori Buku -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('kategori.index') }}">
          <i class="fas fa-fw fa-book-reader"></i>
          <span>Kategori</span></a>
      </li>

      <!-- Nav Item - Buku -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('book.index') }}">
          <i class="fas fa-fw fa-book"></i>
          <span>Books</span></a>
      </li>

      <!-- Nav Item - Transaksi -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Transaksi</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
