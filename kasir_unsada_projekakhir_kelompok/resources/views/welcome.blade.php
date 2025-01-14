<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Halaman Utama Sebelum Login | Aplikasi Kasir</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/swiper.css" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img') }}/favicon/laravel.ico">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.html">Kasir UNSADA</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                @auth
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ url('/home') }}">Home</a>
                </span>
                @else
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ route('login') }}">Masuk Akun</a>
                </span>
                @if (Route::has('register'))
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ route('register') }}">Daftar Akun</a>
                </span>
                @endif
                @endauth
                @endif
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="section-title">Project Akhir - Aplikasi Kasir UNSADA</div>
                        <h1 class="h1-large">Aplikasi Kasir</h1>
                        <p class="p-large"><b>Anggota Kelompok:</b> <br>Jordy Lian Ferdinand, Harsya Febriansyah,<br> Dzaky Fatkhurrahman, dan Raynor Rifat</p>
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <a href="{{ url('/home') }}" class="btn-solid-lg">Halaman Utama</a>
                            @else
                            <a href="{{ route('login') }}" class="btn-solid-lg">Masuk Akun</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-solid-lg">Daftar Akun</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('zinc') }}/images/header-illustration.svg"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon blue">
                            <span class="far fa-file-alt"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pembuatnya Ganteng - Ganteng</h5>
                            <p style="height: 121px;">Raynor Imut</p>

                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon yellow">
                            <span class="fas fa-solar-panel"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Teknologi Informasi UNSADA 22</h5>
                            <p style="height: 121px;">Membuat Project Akhir Framework dengan Laravel 8</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon red">
                            <span class="fas fa-gift"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Untuk Pak Aji Setiawan</h5>
                            <p style="height: 145px;">Terima Kasih telah mengajarkan kami membuat web framework, semoga nilai kita bagus, Amin</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid"
                            src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2><span>Aplikasi Kasir V1.0 Dibuat Menggunakan</span><br> Laravel 8</h2>
                        <p>Laravel adalah framework PHP yang bersifat open source dan dirancang agar proses pengembangan
                            aplikasi web menjadi lebih
                            mudah dan cepat karena berbagai fitur bawaan di dalamnya. Fitur-fitur tersebut merupakan
                            salah satu alasan mengapa
                            banyak pengembangan memanfaatkan kerangka kerja Laravel.</p>
                        <a href="https://laravel.com/docs/8.x" class="btn-solid-reg">Laravel 8 Go!!</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    <div class="mt-5 mb-5"></div>

    <!-- Footer -->
    <div class="footer bg-gray mt-5">
        <img class="decoration-city" src="{{ asset('zinc') }}/images/decoration-city.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Web Universitas Darma Persada : <a href="https://unsada.ac.id/">https://unsada.ac.id/</a></h4>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray mt-5">
        <div class="container">
            <div class="row">
                <!-- end of col -->
                <div class="col-lg-4">
                    <p class="p-small statement">Copyright © <a href="#">Jordy, Harsya, Dzaky, & Raynor</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Distributed By: <a href="https://themewagon.com/"
                            target="_blank">ThemeWagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="{{ asset('zinc') }}/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="{{ asset('zinc') }}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('zinc') }}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('zinc') }}/js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="{{ asset('zinc') }}/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="{{ asset('zinc') }}/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
