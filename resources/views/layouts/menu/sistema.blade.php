<li
    class="nav-item {{ open('home') }} {{ open('/') }} {{ open('usuarios') }} {{ open('roles') }} {{ open('auditorias') }} {{ open('parametros') }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Sistema
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('usuarios.index')
            <li class="nav-item">
                <a href="{{ route('usuarios.index') }}" class="nav-link {{ active('usuarios') }}">
                    <i class="{{ selectedIcon('usuarios') }} fa-circle nav-icon"></i>
                    <p>Usuarios</p>
                </a>
            </li>
        @endcan
        @can('roles.index')
            <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link {{ active('roles') }}">
                    <i class="{{ selectedIcon('roles') }} fa-circle nav-icon"></i>
                    <p>Roles</p>
                </a>
            </li>
        @endcan
        @can('auditorias.index')
            <li class="nav-item">
                <a href="{{ route('auditorias.index') }}" class="nav-link {{ active('auditorias') }}">
                    <i class="{{ selectedIcon('auditorias') }} fa-circle nav-icon"></i>
                    <p>Auditoria</p>
                </a>
            </li>
        @endcan
    </ul>
</li>
