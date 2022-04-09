<li
    class="nav-item {{ open('permisos') }} {{ open('estados') }} {{ open('municipios') }} {{ open('codigos-postales') }}
                    {{ open('colonias') }} {{ open('clientes') }} {{ open('contratos') }} {{ open('definicion-documentos') }}
                    {{ open('registros-patronales') }} {{ open('obras') }} {{ open('factores') }}">
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
        @can('estados.index')
            <li class="nav-item">
                <a href="{{ route('estados.index') }}" class="nav-link {{ active('estados') }}">
                    <i class="{{ selectedIcon('estados') }} fa-circle nav-icon"></i>
                    <p>Estados</p>
                </a>
            </li>
        @endcan
        @can('municipios.index')
            <li class="nav-item">
                <a href="{{ route('municipios.index') }}" class="nav-link {{ active('municipios') }}">
                    <i class="{{ selectedIcon('municipios') }} fa-circle nav-icon"></i>
                    <p>Municipios</p>
                </a>
            </li>
        @endcan
        @can('codigosPostales.index')
            <li class="nav-item">
                <a href="{{ route('codigos-postales.index') }}" class="nav-link {{ active('codigos-postales') }}">
                    <i class="{{ selectedIcon('codigos-postales') }} fa-circle nav-icon"></i>
                    <p>Codigos Postales</p>
                </a>
            </li>
        @endcan
        @can('colonias.index')
            <li class="nav-item">
                <a href="{{ route('colonias.index') }}" class="nav-link {{ active('colonias') }}">
                    <i class="{{ selectedIcon('colonias') }} fa-circle nav-icon"></i>
                    <p>Colonias</p>
                </a>
            </li>
        @endcan
        @can('definicion_documentos.index')
            <li class="nav-item">
                <a href="{{ route('definicion-documentos.index') }}"
                    class="nav-link {{ active('definicion-documentos') }}">
                    <i class="{{ selectedIcon('definicion-documentos') }} fa-circle nav-icon"></i>
                    <p>Definicion de Documentos</p>
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
        @can('contratos.index')
            <li class="nav-item">
                <a href="{{ route('contratos.index') }}" class="nav-link {{ active('contratos') }}">
                    <i class="{{ selectedIcon('contratos') }} fa-circle nav-icon"></i>
                    <p>Contratos</p>
                </a>
            </li>
        @endcan
        @can('registros-patronales.index')
            <li class="nav-item">
                <a href="{{ route('registros-patronales.index') }}"
                    class="nav-link {{ active('registros-patronales') }}">
                    <i class="{{ selectedIcon('registros-patronales') }} fa-circle nav-icon"></i>
                    <p>Registros Patronales</p>
                </a>
            </li>
        @endcan
        @can('obras.index')
            <li class="nav-item">
                <a href="{{ route('obras.index') }}" class="nav-link {{ active('obras') }}">
                    <i class="{{ selectedIcon('obras') }} fa-circle nav-icon"></i>
                    <p>Obras</p>
                </a>
            </li>
        @endcan
        @can('factores.index')
            <li class="nav-item">
                <a href="{{ route('factores.index') }}" class="nav-link {{ active('factores') }}">
                    <i class="{{ selectedIcon('factores') }} fa-circle nav-icon"></i>
                    <p>Factores</p>
                </a>
            </li>
        @endcan
    </ul>
</li>
