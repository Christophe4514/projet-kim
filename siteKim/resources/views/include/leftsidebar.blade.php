<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Congo Drone Services</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ request()->is('home') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="nav-item has-treeview
            {{ request()->is('users') ? 'menu-open' : '' }}
            ">
                    <a href="#" class="nav-link
                {{ request()->is('users') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Utilisateurs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}"
                                class="nav-link {{ request()->is('users') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Administrateurs</p>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item has-treeview {{ request()->is('roles') ? 'menu-open' : '' }}
            ">
                    <a href="#" class="nav-link {{ request()->is('roles') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Roles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}"
                                class="nav-link {{ request()->is('roles') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="nav-item has-treeview
            {{ request()->is('services') ? 'menu-open' : '' }} {{ request()->is('services/create') ? 'menu-open' : '' }}
            ">
                    <a href="#"
                        class="nav-link
                {{ request()->is('services') ? 'active' : '' }} {{ request()->is('services/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Services
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('services.index') }}"
                                class="nav-link {{ request()->is('services') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Services</p>
                            </a>
                        </li>
                    </ul>
                    @permission('Service', 'create')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('services.create') }}"
                                    class="nav-link {{ request()->is('services/create') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Créer un service</p>
                                </a>
                            </li>
                        </ul>
                    @endpermission
                </li>
                <li
                    class="nav-item has-treeview
            {{ request()->is('projects') ? 'menu-open' : '' }} {{ request()->is('projects/create') ? 'menu-open' : '' }}
            ">
                    <a href="#"
                        class="nav-link
                {{ request()->is('projects') ? 'active' : '' }} {{ request()->is('projects/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Projects
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    @permission('Project', 'read')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('projects.index') }}"
                                class="nav-link {{ request()->is('projects') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                    </ul>
                    @endpermission
                    @permission('Project', 'create')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('projects.create') }}"
                                    class="nav-link {{ request()->is('projects/create') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Créer un project</p>
                                </a>
                            </li>
                        </ul>
                    @endpermission
                </li>
                {{--
                <li
                    class="nav-item has-treeview {{ request()->is('addslider') ? 'menu-open' : '' }}
            {{ request()->is('sliders') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('addslider') ? 'active' : '' }}
                {{ request()->is('sliders') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Sliders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/addslider') }}"
                                class="nav-link {{ request()->is('addslider') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Add slider</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/sliders') }}"
                                class="nav-link {{ request()->is('sliders') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="nav-item has-treeview {{ request()->is('addproduct') ? 'menu-open' : '' }}
            {{ request()->is('products') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('addproduct') ? 'active' : '' }}
                {{ request()->is('products') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/addproduct') }}"
                                class="nav-link {{ request()->is('addproduct') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Add product</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/products') }}"
                                class="nav-link {{ request()->is('products') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Products</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ request()->is('orders') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('orders') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Orders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/orders') }}"
                                class="nav-link {{ request()->is('orders') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.0/" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
