<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maryam Portfolio</title>
    <!-- Bootstrap Icons (محلي) -->
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- CSS مكتبات محلية -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <!-- CSS الخاص بالمشروع -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
            <div class="container">
                <h1 class="logo">
                    <img class="logo1" src="{{ asset('img/favicon.png') }}" style="width:40px;">Maryam<span>.dev</span>
                </h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link" href="#home" id="home-link">{{ __('home') }}</a>
                        <a class="nav-link" href="#services" id="services-link">{{ __('services') }}</a>
                        <a class="nav-link" href="#about" id="about-link">{{ __('about') }}</a>
                        <a class="nav-link" href="#contact" id="contact-link">{{ __('contact') }}</a>
                        <li class="nav-item">
                            <button id="toggle-theme" class="btn btn-sm btn-outline-light">🌙</button>
                        </li>
                        <li class="nav-item2 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                                🌐 Language
                            </a>
                            <ul class="dropdown-menu bg-dark text-light" aria-labelledby="languageDropdown">
                                {{-- <li class="dropdown-item d-flex align-items-center">
                                    <img src="icons/us.png" alt="USA Flag" style="width: 20px; height: 20px; margin-right: 10px;"> 
                                    English
                                </li>
                                <li class="dropdown-item d-flex align-items-center">
                                    <img src="icons/ar.png" alt="Saudi Flag" style="width: 20px; height: 20px; margin-right: 10px;"> 
                                    العربية
                                </li> --}}
                                <li class="dropdown-item d-flex align-items-center">
                                    <a href="{{ route('change-language', 'en') }}" class="text-light text-decoration-none">
                                        <img src="{{ asset('icons/us.png') }}" alt="USA Flag" style="width: 20px; height: 20px; margin-right: 10px;"> 
                                        {{ __('English') }}
                                    </a>
                                </li>
                                <li class="dropdown-item d-flex align-items-center">
                                    <a href="{{ route('change-language', 'ar') }}" class="text-light text-decoration-none">
                                        <img src="{{ asset('icons/ar.png') }}" alt="Saudi Flag" style="width: 20px; height: 20px; margin-right: 10px;"> 
                                        {{ __('Arabic') }}
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Hero Section -->
    @include('sections.hero')
    <!-- state Section -->
    @include('sections.states')

    <!-- Sections Container -->
    <div class="sections-container">
        <!-- About Section -->
        @include('sections.about')
        <!-- Portfolio Section -->
        @include('sections.portfolio')
        <!-- Services Section -->
        @include('sections.services')
    </div>
    <!-- Contact Section -->
    @include('sections.contact')

    <!-- JavaScript المكتبات المحلية -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <!-- JavaScript الخاص بالمشروع -->
    <script src="{{ asset('js/style.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>