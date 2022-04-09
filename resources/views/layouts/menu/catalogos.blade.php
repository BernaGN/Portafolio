<li class="nav-item {{ open('clientes') }} {{ open('categorias') }} ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
            Catalogos
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('categorias.index') }}" class="nav-link {{ active('categorias') }}">
                <i class="{{ selectedIcon('categorias') }} fa-circle nav-icon"></i>
                <p>Categorias</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('clientes.index') }}" class="nav-link {{ active('clientes') }}">
                <i class="{{ selectedIcon('clientes') }} fa-circle nav-icon"></i>
                <p>Clientes</p>
            </a>
        </li>
    </ul>
</li>
