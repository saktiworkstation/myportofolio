<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" hrefaria-current="page"
                    href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/projects') ? 'active' : '' }}" href="/dashboard/projects">
                    <span data-feather="shopping-bag"></span>
                    project
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/profiles') ? 'active' : '' }}" href="/dashboard/profiles">
                    <span data-feather="bell"></span>
                    Profile
                </a>
            </li>
        </ul>
    </div>
</nav>
