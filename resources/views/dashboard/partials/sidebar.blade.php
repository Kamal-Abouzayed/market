<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="mx-3 sidebar-brand-text">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="my-0 sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.settings') }}">
          <i class="fas fa-cogs"></i>
          <span>Settings</span></a>
    </li>

    <li class="nav-item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
          <i class="fas fa-tags"></i>
          <span>Categories</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="border-0 rounded-circle" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
