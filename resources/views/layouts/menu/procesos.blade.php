<li class="nav-item {{ open('expedientes') }} {{ open('estimaciones') }}{{ open('obras-extras') }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
            Procesos
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('expedientes.index')
            <li class="nav-item">
                <a href="{{ route('expedientes.index') }}" class="nav-link {{ active('expedientes') }}">
                    <i class="{{ selectedIcon('expedientes') }} fa-circle nav-icon"></i>
                    <p>Expedientes</p>
                </a>
            </li>
        @endcan
        @can('estimaciones.index')
            <li class="nav-item">
                <a href="{{ route('estimaciones.index') }}" class="nav-link {{ active('estimaciones') }}">
                    <i class="{{ selectedIcon('estimaciones') }} fa-circle nav-icon"></i>
                    <p>Estimaciones</p>
                </a>
            </li>
        @endcan
        @can('jornales.index')
            <li class="nav-item">
                <a href="{{ route('jornales.index') }}" class="nav-link {{ active('jornales') }}">
                    <i class="{{ selectedIcon('jornales') }} fa-circle nav-icon"></i>
                    <p>Jornales</p>
                </a>
            </li>
        @endcan
        @can('obras-extras.index')
            <li class="nav-item">
                <a href="{{ route('obras-extras.index') }}" class="nav-link {{ active('obras-extras') }}">
                    <i class="{{ selectedIcon('obras-extras') }} fa-circle nav-icon"></i>
                    <p>Obras Extras</p>
                </a>
            </li>
        @endcan
    </ul>
</li>
