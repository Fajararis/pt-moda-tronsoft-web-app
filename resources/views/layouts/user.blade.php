<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PT. Moda Tronsoft Perkasa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <link href={{ asset('css/style.css') }} rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body class="antialiased" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-2">
            <img src={{ asset('images/logo.png') }} alt="logo" height="40" class="lg-hidden d-inline-block align-text-top me-lg-3">
            <a class="navbar-brand fw-semibold fs-5" href="#page-top">
                PT. Moda Tronsoft Perkasa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-list fs-5"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3 {{ Request::routeIs('home') ? 'active' : '' }}"
                            href={{ route('home') }}>Home</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3 {{ Request::routeIs('product') ? 'active' : '' }}"
                            href={{ route('product') }}>Product</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3 {{ Request::routeIs('about') ? 'active' : '' }}"
                            href={{ route('about') }}>About</a></li>
                    <li class="nav-item bg-warning rounded d-none d-lg-block">
                        <a class="nav-link mx-2 text-dark" href="https://wa.me/085213282270">
                            <i class="bi bi-whatsapp"></i>
                            <span class="ms-1">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="mt-5 bg-dark">
        <div class="container">
            <div class="d-flex flex-column justify-content-between align-items-start py-5">
                <div class="d-flex align-items-center">
                    <div class="mb-2">
                        <a href="index.html" class="d-inline-block">
                            {{-- <img src="assets/images/logo-light.png" alt="" height="24"> --}}
                            <h3 class="text-white mb-0">PT. Moda Tronsoft Perkasa</h3>
                        </a>
                        <p class="mt-4 text-muted">
                            Perusahaan nasional perseroan terbatas yang menyediakan tenaga profesional alih daya untuk
                            memenuhi kebutuhan mitra
                            <span class="d-inline-flex">dan memperkuat sebagai perusahaan yang mengutamakan kualitas
                                dengan kuantitas yang dapat bersaing di era globalisasi.</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <ul class="list-inline fs-6">
                        <li class="list-inline-item">
                            <a href="https://wa.me/087785668394" class="text-muted text-decoration-none">
                                <i class="bi bi-whatsapp">
                                    <span class="ms-2 fst-normal">
                                        0877-8566-8394
                                    </span>
                                </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="mailto:modatronsoftperkasa@gmail.com" class="text-muted text-decoration-none">
                                <i class="bi bi-envelope">
                                    <span class="ms-2 fst-normal">
                                        modatronsoftperkasa@gmail.com
                                    </span>
                                </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-muted text-decoration-none">
                                <i class="bi bi-geo-alt">
                                    <span class="ms-2 fst-normal">
                                        Perum. Sonas Badean Raya Blok B31 Kec. Blimbingsari, Kab.Banyuwangi,
                                        Jawa Timur.
                                    </span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="border-top border-light">
                        <div class="pt-4 d-flex justify-content-center align-items-center">
                            <p class="text-white text-muted">© 2024 PT. Moda Tronsoft Perkasa. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
