<!DOCTYPE html>

<!--
    Powered by Open Source Hosting Automation Software (OpenHAS)
    More information about OpenHAS can be found on www.openhas.net.

    OpenHAS is licensed under the GNU General Public License v3.0.
-->
{{-- The message above may NOT be removed. --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- SEO -->
    <title>@title($title)</title>
    <meta name="description" content="{{ $description }}" />

    <!-- Stylesheets -->
    <link href="{{ asset('/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/demo.min.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="antialiased" data-preferences-theme="{{ (Auth::user()->metadata['preferences']['theme']) ? Auth::user()->metadata['preferences']['theme'] : '' }}">
    <div class="wrapper">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="{{ route('home') }}">
                        <img src="https://raw.githubusercontent.com/OpenHAS-official/media/master/logo/gradient-proxeuse.svg" height="32" alt="@lang('admin.logoalt')" class="navbar-brand-image">
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown d-none d-md-flex me-3">
                        <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                            aria-label="Show notifications">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                            <span class="badge bg-red"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                            <div class="card">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet
                                    consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae
                                    sapiente. Amet debitis et magni maxime necessitatibus ullam.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown" role="button">
                        <div class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="avatar avatar-sm"
                                style="background-image: url({{ Auth::user()->avatar() }})"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ Auth::user()->fullname() }}</div>
                                <div class="mt-1 small text-muted">ROLE</div>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="{{ route('account.security') }}" class="dropdown-item">@lang('admin.account.security.title')</a>
                            <a href="{{ route('account.address') }}" class="dropdown-item">@lang('admin.account.address.title')</a>
                            <a href="{{ route('account.preferences') }}" class="dropdown-item">@lang('admin.account.preferences.title')</a>
                            <a href="{{ route('account.security') }}#password" class="dropdown-item">@lang('admin.account.changepassword.title')</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item">@lang('admin.logout')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar navbar-light">
                    <div class="container-xl">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ (request()->is('home*')) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('home') }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                                    role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                                            <line x1="12" y1="12" x2="20" y2="7.5" />
                                            <line x1="12" y1="12" x2="12" y2="21" />
                                            <line x1="12" y1="12" x2="4" y2="7.5" />
                                            <line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Interface
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./empty.html">
                                                Empty page
                                            </a>
                                            <a class="dropdown-item" href="./accordion.html">
                                                Accordion
                                            </a>
                                            <a class="dropdown-item" href="./blank.html">
                                                Blank page
                                            </a>
                                            <a class="dropdown-item" href="./buttons.html">
                                                Buttons
                                            </a>
                                            <a class="dropdown-item" href="./cards.html">
                                                Cards
                                            </a>
                                            <a class="dropdown-item" href="./cards-masonry.html">
                                                Cards Masonry
                                            </a>
                                            <a class="dropdown-item" href="./colors.html">
                                                Colors
                                            </a>
                                            <a class="dropdown-item" href="./dropdowns.html">
                                                Dropdowns
                                            </a>
                                            <a class="dropdown-item" href="./icons.html">
                                                Icons
                                            </a>
                                            <a class="dropdown-item" href="./modals.html">
                                                Modals
                                            </a>
                                            <a class="dropdown-item" href="./maps.html">
                                                Maps
                                            </a>
                                            <a class="dropdown-item" href="./map-fullsize.html">
                                                Map fullsize
                                            </a>
                                            <a class="dropdown-item" href="./maps-vector.html">
                                                Vector maps
                                            </a>
                                            <a class="dropdown-item" href="./navigation.html">
                                                Navigation
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./charts.html">
                                                Charts
                                            </a>
                                            <a class="dropdown-item" href="./charts-heatmap.html">
                                                Charts heatmap
                                            </a>
                                            <a class="dropdown-item" href="./pagination.html">
                                                Pagination
                                            </a>
                                            <a class="dropdown-item" href="./skeleton.html">
                                                Skeleton
                                            </a>
                                            <a class="dropdown-item" href="./tabs.html">
                                                Tabs
                                            </a>
                                            <a class="dropdown-item" href="./tables.html">
                                                Tables
                                            </a>
                                            <a class="dropdown-item" href="./carousel.html">
                                                Carousel
                                            </a>
                                            <a class="dropdown-item" href="./lists.html">
                                                Lists
                                            </a>
                                            <a class="dropdown-item" href="./typography.html">
                                                Typography
                                            </a>
                                            <a class="dropdown-item" href="./page-headers.html">
                                                Page headers
                                            </a>
                                            <a class="dropdown-item" href="./markdown.html">
                                                Markdown
                                            </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication"
                                                    data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                                    Authentication
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./sign-in.html" class="dropdown-item">Sign in</a>
                                                    <a href="./sign-up.html" class="dropdown-item">Sign up</a>
                                                    <a href="./forgot-password.html" class="dropdown-item">Forgot
                                                        password</a>
                                                    <a href="./terms-of-service.html" class="dropdown-item">Terms of
                                                        service</a>
                                                    <a href="./auth-lock.html" class="dropdown-item">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-error"
                                                    data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                                    Error pages
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./error-404.html" class="dropdown-item">404 page</a>
                                                    <a href="./error-500.html" class="dropdown-item">500 page</a>
                                                    <a href="./error-maintenance.html" class="dropdown-item">Maintenance
                                                        page</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./form-elements.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="9 11 12 14 20 6" />
                                            <path
                                                d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                            </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Form elements
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                    role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                            </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Extra
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="./activity.html">
                                        Activity
                                    </a>
                                    <a class="dropdown-item" href="./gallery.html">
                                        Gallery
                                    </a>
                                    <a class="dropdown-item" href="./invoice.html">
                                        Invoice
                                    </a>
                                    <a class="dropdown-item" href="./search-results.html">
                                        Search results
                                    </a>
                                    <a class="dropdown-item" href="./pricing.html">
                                        Pricing cards
                                    </a>
                                    <a class="dropdown-item" href="./users.html">
                                        Users
                                    </a>
                                    <a class="dropdown-item" href="./license.html">
                                        License
                                    </a>
                                    <a class="dropdown-item" href="./music.html">
                                        Music
                                    </a>
                                    <a class="dropdown-item" href="./widgets.html">
                                        Widgets
                                    </a>
                                    <a class="dropdown-item" href="./wizard.html">
                                        Wizard
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                                    role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <rect x="4" y="4" width="6" height="5" rx="2" />
                                            <rect x="4" y="13" width="6" height="7" rx="2" />
                                            <rect x="14" y="4" width="6" height="7" rx="2" />
                                            <rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Layout
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-horizontal.html">
                                                Horizontal
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical.html">
                                                Vertical
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical-transparent.html">
                                                Vertical transparent
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical-right.html">
                                                Right vertical
                                            </a>
                                            <a class="dropdown-item" href="./layout-condensed.html">
                                                Condensed
                                            </a>
                                            <a class="dropdown-item" href="./layout-condensed-dark.html">
                                                Condensed dark
                                            </a>
                                            <a class="dropdown-item" href="./layout-combo.html">
                                                Combined
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-navbar-dark.html">
                                                Navbar dark
                                            </a>
                                            <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                                Navbar sticky
                                            </a>
                                            <a class="dropdown-item" href="./layout-navbar-overlap.html">
                                                Navbar overlap
                                            </a>
                                            <a class="dropdown-item" href="./layout-dark.html">
                                                Dark mode
                                            </a>
                                            <a class="dropdown-item" href="./layout-rtl.html">
                                                RTL mode
                                            </a>
                                            <a class="dropdown-item" href="./layout-fluid.html">
                                                Fluid
                                            </a>
                                            <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                                Fluid vertical
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item {{ (request()->is('account*')) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('account.index') }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        @lang('admin.account.title')
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                            <form action="." method="get">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="10" cy="10" r="7" />
                                            <line x1="21" y1="21" x2="15" y2="15" /></svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search…"
                                        aria-label="Search in website">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content', __('admin.errors.pagecontent'))
    </div>
    <footer class="footer footer-transparent d-print-none">
        <div class="container">
            <div class="row text-center align-items-center flex-row-reverse">
                <div class="col-lg-auto ms-lg-auto">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item"><a href="../docs/index.html"
                                class="link-secondary">Documentation</a></li>
                        <li class="list-inline-item"><a href="../license.html"
                                class="link-secondary">License</a></li>
                        <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                                class="link-secondary" rel="noopener">Source code</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                            Copyright &copy; {{ date("Y") }}
                            <a href="https://openhas.net" class="link-secondary">OpenHAS</a>.
                            All rights reserved.
                        </li>
                        <li class="list-inline-item">
                            <a href="../changelog.html" class="link-secondary" rel="noopener">v1.0.0-beta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    @yield('modals')

    <!-- Libs JS -->
    <script src="{{ asset('/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <!-- Tabler Core -->
    <script src="{{ asset('/js/tabler.min.js') }}"></script>
    <!-- Other Scripts -->
    <script src="{{ asset('/js/custom.js') }}"></script>
    @yield('scripts')
</body>

</html>
