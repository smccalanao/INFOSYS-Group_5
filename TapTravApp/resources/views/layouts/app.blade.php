<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SummitSync - Climber Companion') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-cyborg-gaming.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Breeze / Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <!-- ***** Preloader ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots"><span></span><span></span><span></span></div>
        </div>
    </div>

   <!-- ***** Header ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav d-flex align-items-center justify-content-between">

                    <!-- System Name instead of Search -->
                    <div class="me-3 flex-grow-1">
                        <a href="{{ route('dashboard') }}" class="text-white fw-bold fs-4">SummitSync</a>
                    </div>

                    <!-- Menu -->
                    <ul class="nav d-flex align-items-center flex-wrap">
                        <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                        <li><a href="{{ url('/trip-explorer') }}" class="{{ request()->routeIs('trip-explorer') ? 'active' : '' }}">Trip Explorer</a></li>
                        <li><a href="{{ url('/trip-planner') }}" class="{{ request()->routeIs('trip-planner') ? 'active' : '' }}">Trip Planner</a></li>
                        <li><a href="{{ url('/gearlist') }}" class="{{ request()->routeIs('gearlist') ? 'active' : '' }}">Gear Checklist</a></li>
                        <li><a href="{{ url('/climb-gallery') }}" class="{{ request()->routeIs('climb-gallery') ? 'active' : '' }}">Climb Gallery</a></li>
                        <li class="d-none d-lg-block"><a href="{{ route('profile.edit') }}" class="{{ request()->routeIs('profile.edit') ? 'active' : '' }}">Profile</a></li>
                        @auth
                        <!-- Desktop: Username + Logout Dropdown -->
                        <li class="nav-item dropdown ms-3 d-none d-lg-block">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Hello, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>

                        <!-- Mobile: Profile + Logout -->
                        <li class="d-lg-none"><a href="{{ route('profile.edit') }}">Profile</a></li>
                        <li class="d-lg-none">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link text-danger p-0">Logout</button>
                            </form>
                        </li>
                        @endauth
                    </ul>

                    <!-- Mobile menu trigger -->
                    <a class="menu-trigger d-lg-none"><span>Menu</span></a>

                </nav>
            </div>
        </div>
    </div>
</header>




    <!-- ***** Page Content ***** -->
    <main class="container mt-4">
        {{ $slot }}
    </main>

    <!-- ***** Footer ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © {{ now()->year }}
                        <a href="#">SummitSync</a>. All rights reserved.
                        <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a>
                        Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/js/popup.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>
