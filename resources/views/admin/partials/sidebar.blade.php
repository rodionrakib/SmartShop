<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

     




     <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.products.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Products</span></a>
      </li>
      <!-- Divider -->

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Categories</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.sliders.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Sliders</span></a>
      </li>
    

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAttribute" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Attributes</span>
        </a>
        <div id="collapseAttribute" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('admin.attributes.index')}}">Attribute List</a>
            <a class="collapse-item" href="{{route('admin.attributes.create')}}">Create Attribute</a>
          </div>
        </div>
      </li>

      <!-- Admin Users -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.users.index')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Employees</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.orders.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Orders</span></a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contacts.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Contact Queries</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.brands.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Brands</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>