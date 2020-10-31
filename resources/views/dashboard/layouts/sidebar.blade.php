<nav class="sidebar sidebar-offcanvas shadow" id="sidebar">
    <ul class="nav">
        <li class="nav-item @if (Request::is('dashboard')) active @endif">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="ti-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item @if (Request::is('dashboard/posts*')) active @endif">
            <a class=" nav-link" href="{{ route('dashboard.posts.index') }}">
                <i class="ti-layout-list-post menu-icon"></i>
                <span class="menu-title">Posts</span>
            </a>
        </li>

    </ul>
</nav>