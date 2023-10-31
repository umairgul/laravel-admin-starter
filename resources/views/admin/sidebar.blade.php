<aside class="navbar navbar-vertical navbar-expand-sm navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="#">
                <img src="https://preview.tabler.io/static/logo-white.svg" width="110" height="32" alt="Tabler"
                    class="navbar-brand-image">
            </a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <span class="nav-link-title">
                            <i class="ti ti-brand-google-home"></i> Dashboard
                        </span>
                    </a>
                </li>

                {{-- Profile Links --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-title">
                            <i class="ti ti-user-circle"></i> Profile
                        </span>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                    Update Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.password') }}">
                                    Change Password
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</aside>
