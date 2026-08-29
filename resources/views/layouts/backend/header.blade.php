<style>
    #notificationList {
        max-height: 230px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    /* Header options scrollable */
    /* .topnav-menu {
        overflow-x: auto;
        white-space: nowrap;
    }

    .topnav-menu::-webkit-scrollbar {
        height: 6px;
    }

    .topnav-menu::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 4px;
    }

    .topnav-menu::-webkit-scrollbar-thumb:hover {
        background: #999;
    }

    .navbar-nav {
        flex-wrap: nowrap;
    } */
</style>
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('logo.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('logo.png')}}" alt="" height="42">
                    </span>
                </a>

                <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('logo.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('logo.png')}}" alt="" height="22">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse"
                data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset('adminDashboard/assets/images/avatar-1.jpg') }}" alt="Header Avatar">
                    <span class="ms-2 d-none d-sm-block user-item-desc">
                        <span class="user-name">{{Auth::user()->name}}</span>
                        <span class="user-sub-title"><b>Role: </b>Admin</span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 bg-primary border-bottom">
                        <h6 class="mb-0 text-white">{{Auth::user()->name}}</h6>
                        <p class="mb-0 font-size-11 text-white-50 fw-semibold">{{Auth::user()->email}}</p>
                    </div>
                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Profile</span></a>
                    <div class="dropdown-divider"></div>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                    </form>

                    <a class="dropdown-item" href="javascript:void(0);"
                        onclick="document.getElementById('logout-form').submit();"><i
                            class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i><span
                            class="align-middle">Logout</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="topnav">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('dashboard')}}"
                                id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon nav-icon" data-feather="monitor"></i>
                                <span data-key="t-dashboards">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('categories.index')}}"
                                id="topnav-categories" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon nav-icon" data-feather="grid"></i>
                                <span data-key="t-categories">Categories</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('services.index')}}" id="topnav-apps" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="briefcase"></i>
                                <span data-key="t-degrees">Services</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{ route('products.index') }}" role="button">
                                <i class="icon nav-icon" data-feather="shopping-bag"></i>
                                <span>Products</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('careers.index')}}" id="topnav-careers" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="users"></i>
                                <span data-key="t-careers">Careers</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('contacts.index')}}" id="topnav-contacts" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="mail"></i>
                                <span data-key="t-contacts">Contacts</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('admin.quotes.index')}}" id="topnav-quotes" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="file-text"></i>
                                <span data-key="t-quotes">Quotes</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
