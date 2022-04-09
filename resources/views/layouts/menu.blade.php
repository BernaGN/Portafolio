<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <center><span class="brand-text font-weight-bold">{{ config('app.name') }}</span></center>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/' . auth()->user()->imagen) }}" class="rounded-circle" alt="User Image"
                    style="width:40px;height:40px">
            </div>
            <div class="info">
                <a class="d-block lead">Hola {{ auth()->user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            Inicio
                        </p>
                    </a>
                </li>

                @include('layouts.menu.sistema')

                @include('layouts.menu.principal')

                @include('layouts.menu.catalogos')

                @include('layouts.menu.procesos')

                @include('layouts.menu.reportes')

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- /.modal -->
