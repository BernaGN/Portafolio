<li class="nav-item {{ open('proyectos') }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
            Procesos
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('proyectos.index')
            <li class="nav-item">
                <a href="{{ route('proyectos.index') }}" class="nav-link {{ active('proyectos') }}">
                    <i class="{{ selectedIcon('proyectos') }} fa-circle nav-icon"></i>
                    <p>Proyectos</p>
                </a>
            </li>
        @endcan
    </ul>
</li>
