@can('principal.index')
    <li class="nav-item {{ open('footer') }} {{ open('banner') }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Home
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('banner.index') }}" class="nav-link {{ active('banner') }}">
                    <i class="{{ selectedIcon('banner') }} fa-circle nav-icon"></i>
                    <p>Banner</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('footer.index') }}" class="nav-link {{ active('footer') }}">
                    <i class="{{ selectedIcon('footer') }} fa-circle nav-icon"></i>
                    <p>Footer</p>
                </a>
            </li>
        </ul>
    </li>
@endcan
