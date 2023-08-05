<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="index.html" class="logo-light">
            <img src="https://centrodepracticas.antioquia.gov.co/media/k2/items/cache/ccb4e23c8aa216f1e96d31ab209c036b_L.jpg"
                alt="logo" class="logo-lg">
            <img src="https://centrodepracticas.antioquia.gov.co/media/k2/items/cache/ccb4e23c8aa216f1e96d31ab209c036b_L.jpg"
                alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html" class="logo-dark">
            <img src="https://centrodepracticas.antioquia.gov.co/media/k2/items/cache/ccb4e23c8aa216f1e96d31ab209c036b_L.jpg"
                alt="dark logo" class="logo-lg">
            <img src="https://centrodepracticas.antioquia.gov.co/media/k2/items/cache/ccb4e23c8aa216f1e96d31ab209c036b_L.jpg"
                alt="small logo" class="logo-sm">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva
                    Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Panel de administracion</li>

            <li class="menu-item">
                <a href="?c=dashboard&m=dashboard" class="menu-link">
                    <span class="menu-icon"><i data-feather="monitor"></i></span>
                    <span class="menu-text"> Escritorio </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="briefcase"></i></span>
                    <span class="menu-text"> Compañias </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=companies&m=index" class="menu-link">
                                <span class="menu-text">Listar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link collapsed" aria-expanded="false">
                    <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg></span>
                    <span class="menu-text"> Productos </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuExpages" style="">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=products&m=index" class="menu-link">
                                <span class="menu-text">Listar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>