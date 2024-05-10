<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/godongpng.png') }}" alt="AdminLTE Logo" class="brand-image img-circle">
        <span class="brand-text font-weight-light">CAFE
            <span style="color: #eca233;">
                <strong>De-Fidz</strong>
            </span>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (@Auth::user()->foto)
                    <img src="{{ asset('uploads/user/' . Auth::user()->foto) }}" class="img-circle elevation-2"
                        alt="User Image">
                @else
                    <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ @Auth::user()->name }}
                    [ <strong class="text-success">{{ Str::ucfirst(@Auth::user()->role) }}</strong> ]
                </a>
            </div>
        </div> --}}

        <!-- SidebarSearch Form -->
        <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link {{ request()->is(['user']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Sidebar Menu -->
        {{-- <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->is(['menu', 'menu/*', 'category', 'kitchen']) ? 'menu-is-opening menu-open' : '' }}">
                    <a href="javascript:void(0)"
                        class="nav-link {{ request()->is(['menu', 'menu/*', 'category', 'kitchen']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-utensils"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('menu.create') }}"
                                class="nav-link {{ request()->is(['menu/create']) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('menu.index') }}"
                                class="nav-link {{ request()->is(['menu']) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}"
                                class="nav-link {{ request()->is(['category']) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kitchen.index') }}"
                                class="nav-link {{ request()->is(['kitchen']) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-coffee"></i>
                                <p>Kitchen</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('table.index') }}"
                        class="nav-link {{ request()->is(['table']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chair"></i>
                        <p>
                            Tables
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.index') }}"
                        class="nav-link {{ request()->is(['customer']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Members
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->is(['transaction', 'transaction/*']) ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is(['transaction', 'transaction/*']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Transactions
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('trans.create') }}"
                                class="nav-link {{ request()->is(['transactions/create']) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-plus-square"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('trans.index') }}"
                                class="nav-link {{ request()->is(['transaction']) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}"
                        class="nav-link {{ request()->is(['user']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('report.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>
                            Reports
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('auth.logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav> --}}
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
