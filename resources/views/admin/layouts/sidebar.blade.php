<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar brand/logo -->
    <a href="{{ route('dashboard.index') }}" class="brand-link">
        <!-- Logo -->
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <!-- Brand text -->
        <span class="brand-text font-weight-light">Aplikasi Cashflow</span>
    </a>

    <!-- Sidebar content -->
    <div class="sidebar">
        <!-- User panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('dashboard.index') }}" class="d-block">{{ auth()->user()->username }}</a>
            </div>
        </div>

        <!-- Sidebar navigation menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- ADMIN section -->
                @if(auth()->user()->role == 'super' || auth()->user()->role == 'admin')
                <li class="nav-header">ADMIN</li>
                <!-- Data Master menu -->
                <li
                    class="nav-item {{ Request::is('admin/user') ? 'menu-open' : '' }} {{ Request::is('admin/category') ? 'menu-open' : '' }} {{ Request::is('admin/vendor') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('admin/user') ? 'active' : '' }} {{ Request::is('admin/category') ? 'active' : '' }} {{ Request::is('admin/vendor') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}"
                                class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}">
                                <i class="far fa-user nav-icon"></i>
                                <p>Master User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('vendor.index') }}"
                                class="nav-link {{ Request::is('admin/vendor') ? 'active' : '' }}">
                                <i class="fas fa-store nav-icon"></i>
                                <p>Master Supplier</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}"
                                class="nav-link {{ Request::is('admin/category') ? 'active' : '' }}">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Master Kriteria</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <!-- Tambah Master menu -->
                <li
                    class="nav-item {{ Request::is('admin/user/create') ? 'menu-open' : '' }} {{ Request::is('admin/category/create') ? 'menu-open' : '' }} {{ Request::is('admin/vendor/create') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('admin/user/create') ? 'active' : '' }} {{ Request::is('admin/category/create') ? 'active' : '' }} {{ Request::is('admin/vendor/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Tambah Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.create') }}"
                                class="nav-link {{ Request::is('admin/user/create') ? 'active' : '' }}">
                                <i class="far fa-user nav-icon"></i>
                                <p>Tambah User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('vendor.create') }}"
                                class="nav-link {{ Request::is('admin/vendor/create') ? 'active' : '' }}">
                                <i class="fas fa-store nav-icon"></i>
                                <p>Tambah Supplier</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.create') }}"
                                class="nav-link {{ Request::is('admin/category/create') ? 'active' : '' }}">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Tambah Kriteria</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <!-- Perhitungan SPK section -->
                <li class="nav-header">Perhitungan SPK</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Menu Perhitungan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>TBA</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>