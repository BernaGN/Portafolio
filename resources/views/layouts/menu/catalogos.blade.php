<li
    class="nav-item {{ open('permisos') }} {{ open('clientes') }} {{ open('categorias') }} {{ open('etiquetas') }} {{ open('habilidades') }}
    {{ open('servicios') }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
            Catalogos
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('permisos.index')
            <li class="nav-item">
                <a href="{{ route('permisos.index') }}" class="nav-link {{ active('permisos') }}">
                    <i class="{{ selectedIcon('permisos') }} fa-circle nav-icon"></i>
                    <p>Permisos</p>
                </a>
            </li>
        @endcan
        @can('clientes.index')
            <li class="nav-item">
                <a href="{{ route('clientes.index') }}" class="nav-link {{ active('clientes') }}">
                    <i class="{{ selectedIcon('clientes') }} fa-circle nav-icon"></i>
                    <p>Clientes</p>
                </a>
            </li>
        @endcan
        @can('etiquetas.index')
            <li class="nav-item">
                <a href="{{ route('etiquetas.index') }}" class="nav-link {{ active('etiquetas') }}">
                    <i class="{{ selectedIcon('etiquetas') }} fa-circle nav-icon"></i>
                    <p>Etiquetas</p>
                </a>
            </li>
        @endcan
        @can('habilidades.index')
            <li class="nav-item">
                <a href="{{ route('habilidades.index') }}" class="nav-link {{ active('habilidades') }}">
                    <i class="{{ selectedIcon('habilidades') }} fa-circle nav-icon"></i>
                    <p>Habilidades</p>
                </a>
            </li>
        @endcan
    </ul>
</li>
