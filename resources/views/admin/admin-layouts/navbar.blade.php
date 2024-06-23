<!-- Begin page -->
<div id="layout-wrapper">
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="#" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/img/logo.jpg') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/img/logo.jpg') }}" alt="" height="17">
                        </span>
                    </a>

                    <a href="{{ route('admin') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/img/logo.jpg') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/img/logo.jpg') }}" alt="" height="40">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                    id="vertical-menu-btn">
                    <i class="bi bi-list"></i>
                </button>
            </div>

            <div class="d-flex">
                {{-- Full Screen Toggle --}}
                <div class="dropdown d-none d-lg-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="bi bi-arrows-fullscreen"></i>
                    </button>
                </div>

                {{-- User Menu --}}
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle" style="font-size: 1.5rem"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
    </header>
