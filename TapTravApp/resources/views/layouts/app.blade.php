<!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'SummitSync - Climber Companion') }}</title>

            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

            <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

            <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/templatemo-cyborg-gaming.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
            <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>

        <body class="font-sans antialiased">

            <div id="js-preloader" class="js-preloader">
                <div class="preloader-inner">
                    <span class="dot"></span>
                    <div class="dots"><span></span><span></span><span></span></div>
                </div>
            </div>

            <header class="new-header-area">
                <div class="container">
                    <nav class="new-navbar">
                        <a href="{{ route('dashboard') }}" class="navbar-brand">SummitSync</a>

                        <button class="navbar-toggler" id="navbarToggler" aria-label="Toggle navigation">
                            <span class="toggler-icon top-bar"></span>
                            <span class="toggler-icon middle-bar"></span>
                            <span class="toggler-icon bottom-bar"></span>
                        </button>

                        <div class="navbar-collapse" id="navbarMenu">
                            <ul class="navbar-nav">
                                <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                                <li><a href="{{ url('/trip-explorer') }}" class="{{ request()->is('trip-explorer*') ? 'active' : '' }}">Trip Explorer</a></li>
                                <li><a href="{{ url('/trip-planner') }}" class="{{ request()->is('trip-planner*') ? 'active' : '' }}">Trip Planner</a></li>
                                <li><a href="{{ url('/gearlist') }}" class="{{ request()->is('gearlist*') ? 'active' : '' }}">Gear Checklist</a></li>
                                <li><a href="{{ url('/climb-gallery') }}" class="{{ request()->is('climb-gallery*') ? 'active' : '' }}">Climb Gallery</a></li>

                                @auth
                                    <li class="user-controls">
                                        <span class="username">Hello, {{ Auth::user()->name }}</span>
                                        <a class="user-link" href="{{ route('profile.edit') }}">Profile</a>
                                        <form method="POST" action="{{ route('logout') }}" class="logout-form-inline">
                                            @csrf
                                            <button type="submit" class="user-link logout-button-inline">Logout</button>
                                        </form>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <script>
            document.addEventListener('DOMContentLoaded', () => {
                const navbarToggler = document.getElementById('navbarToggler');
                const navbarMenu = document.getElementById('navbarMenu');
                const dropdownToggles = document.querySelectorAll('.new-navbar .dropdown-toggle');

                // Toggle mobile menu
                if (navbarToggler && navbarMenu) {
                    navbarToggler.addEventListener('click', () => {
                        navbarToggler.classList.toggle('active');
                        navbarMenu.classList.toggle('active');
                    });
                }

                // Handle dropdowns for both mobile and desktop
                dropdownToggles.forEach(toggle => {
                    toggle.addEventListener('click', (e) => {
                        e.preventDefault();
                        // Find the parent list item and toggle the 'active' class
                        const parentLi = toggle.parentElement;
                        parentLi.classList.toggle('active');

                        // Close other open dropdowns
                        dropdownToggles.forEach(otherToggle => {
                            if (otherToggle !== toggle) {
                                otherToggle.parentElement.classList.remove('active');
                            }
                        });
                    });
                });

                // Close dropdowns if clicking outside
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('.nav-item-dropdown')) {
                        dropdownToggles.forEach(toggle => {
                            toggle.parentElement.classList.remove('active');
                        });
                    }
                });
            });
            </script>

            <main class="container mt-4">
                {{ $slot }}
            </main>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>
                                Copyright © {{ now()->year }}
                                <a href="#">SummitSync</a>. All rights reserved.
                                <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a> Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
            <!-- use bootstrap bundle (includes Popper) -->
            <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
             <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
             <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
             <script src="{{ asset('assets/js/tabs.js') }}"></script>
             <script src="{{ asset('assets/js/popup.js') }}"></script>
             <script src="{{ asset('assets/js/custom.js') }}"></script>
            <!-- popper already included in bootstrap.bundle; removed separate include -->

            <script>
            // Hide preloader once page is fully loaded. Guarded to avoid errors.
            window.addEventListener('load', function () {
                const pre = document.getElementById('js-preloader');
                if (!pre) return;
                pre.classList.add('loaded');
                setTimeout(() => pre.remove && pre.remove(), 450);
            });
            </script>

        </body>
        </html>