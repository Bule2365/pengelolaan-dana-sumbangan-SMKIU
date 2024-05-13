{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            color: #fff;
            display: block;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .logout {
            margin-top: auto;
            padding-bottom: 20px;
            text-align: center;
        }

        .logout a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .logout a:hover {
            color: #f0f0f0;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .content h1 {
            color: #333;
        }

        .button-container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <a href="{{ route('user.profileAkun') }}">Profile {{ $user->name }}</a>
<a href="{{ route('user.listDonasi') }}">Donasi Sekarang</a>
<a href="{{ route('user.informasiDonasi') }}">Cara melakukan Donasi</a>

<div class="logout">
    <!-- Tombol Logout -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
</div>
</div>

<div class="content">
    <h1>Ini adalah halaman homepage</h1>

    Tentang aplikasi pengelolaan dana sumbangan ini:
    Aplikasi kami adalah platform inovatif yang bertujuan untuk memudahkan pengguna dalam melakukan sumbangan kepada berbagai program dan kegiatan amal yang membutuhkan dukungan.
    Dengan menggunakan aplikasi ini, Anda dapat dengan mudah menemukan informasi mengenai berbagai program donasi yang sedang berlangsung, mulai dari bantuan kemanusiaan, penyuluhan kesehatan, hingga pembangunan infrastruktur di daerah terpencil.
    Kami menghubungkan para donatur dengan berbagai lembaga amal yang terpercaya dan memiliki dampak sosial yang nyata.
    Melalui aplikasi ini, kami berharap dapat memfasilitasi proses sumbangan yang lebih transparan, efisien, dan terukur, sehingga setiap kontribusi yang diberikan dapat memberikan manfaat yang maksimal bagi masyarakat yang membutuhkan.
    Mari bergabung dan berikan perubahan positif melalui sumbangan Anda!
</div>
</body>

</html> --}}

<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--====== Title ======-->
    <title>Bersama</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../images/logobersama.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="../assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <!--====== tailwind css ======-->
    <link rel="stylesheet" href="../assets/css/tailwind.css">
</head>

<body>
    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <nav class="flex items-center justify-between navbar navbar-expand-md">
                            <a class="mr-4 navbar-brand" href="index.html">
                                <img src="../images/logobersama.png" alt="Logo">
                            </a>
                            <button class="block navbar-toggler focus:outline-none md:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <!-- justify-center hidden md:flex collapse navbar-collapse sub-menu-bar -->
                            <div class="absolute left-0 z-30 hidden w-full px-5 py-3 duration-300 bg-white shadow md:opacity-100 md:w-auto collapse navbar-collapse md:block top-100 mt-full md:static md:bg-transparent md:shadow-none" id="navbarOne">
                                <ul class="items-center content-start mr-auto lg:justify-center md:justify-end navbar-nav md:flex">
                                    <!-- flex flex-row mx-auto my-0 navbar-nav -->
                                    <li class="nav-item ">
                                        <a href="{{ route('user.listDonasi') }}">Donasi Sekarang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.informasiDonasi') }}">Cara melakukan Donasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ route('user.inbox') }}">Surat masuk</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="items-center justify-end hidden navbar-social lg:flex">
                                <!-- Tambahkan elemen social media jika diperlukan -->
                            </div>
                            <ul class="flex footer-social">
                                <li class="relative group">
                                    <div class="relative group" id="profileDropdownWrapper">
                                        <button onclick="toggleDropdown()" class="focus:outline-none" >
                                            <div class="flex items-center nav-profile">
                                                <div class="nav-profile-text ml-2 nav-item">
                                                    <p class="mb-1 text-black "> Hallo {{ $user->name }}
                                                        <i class="fi fi-rr-angle-small-down"></i>
                                                    </p>
                                                </div>
                                            </div>
                                        </button>
                                        <div id="profileDropdown" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden p">
                                            <div class="py-1">
                                                <a href="{{route('user.profileAkun')}}" class="block px-4 py-2 text-sm text-gray-700 ">informasi akun</a>
                                                <div class="border-t border-gray-100"></div>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 ">
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="home" class="relative z-10 header-hero" style="background-image: url(../images/header-bg.jpg)">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-5/6 xl:w-2/3">
                    <div class="pt-48 pb-64 text-center header-content">
                        <h3 class="mb-5 text-3xl font-semibold leading-tight text-gray-900 md:text-5xl">Aplikasi
                            Pengelolaan Dana Sumbangan</h3>
                        <p class="px-5 mb-10 text-xl text-gray-700">Sebuah aplikasi untuk menyalurkan dan mengadakan
                            penggalangan dana yang praktis dan amanah</p>

                    </div> <!-- header content -->
                </div>
            </div> <!-- row -->
        </div>
        <!-- container -->
        <div class="absolute bottom-0 z-20 w-full h-auto -mb-1 header-shape">
            <img src="../images/header-shape.svg" alt="shape">
        </div>
    </div> <!-- header content -->
    </header>



    <!--====== HEADER PART ENDS ======-->


    <!--====== PRICING PART START ======-->


    <!--====== PRICING PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->

    <section id="call-to-action" class="relative overflow-hidden bg-blue-600 call-to-action">
        <div class="absolute top-0 left-0 w-1/2 h-full call-action-image">
            <img src="../images/call-to-action.png" alt="call-to-action">
        </div>

        <div class="container-fluid">
            <div class="justify-end row">
                <div class="w-full lg:w-1/2">
                    <div class="py-32 mx-auto text-center call-action-content">
                        <h2 class="mb-5 text-5xl font-semibold leading-tight text-white">Ayo Buat penggalangan bersama kami
                        </h2>
                        <p class="mb-6 text-white">Banyak orang yang sudah terbantu dengan penggalangan dana Kami</p>
                    </div> <!-- slider-content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->

    <!--====== all THREE PART START ======-->


    <!--====== TESTIMONIAL THREE PART ENDS ======-->

    <!--====== CLIENT LOGO PART START ======-->

    <section class="py-16 bg-gray-100 client-logo-area">
        <div class="container">
            <div class="items-center row">
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="../images/client_logo_01.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="../images/client_logo_02.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="../images/client_logo_03.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="../images/client_logo_04.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CLIENT LOGO PART ENDS ======-->

    <!--====== CONTACT PART START ======-->


    <!--====== FOOTER PART START ======-->


    <footer id="footer" class="bg-gray-100 footer-area">
        <div class="mb-16 footer-widget">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <div class="items-end justify-between block mb-8 footer-logo-support md:flex">
                            <div class="flex items-end footer-logo">
                                <a class="mt-8" href="index.html"><img src="../images/logo.svg" alt="Logo"></a>

                                <ul class="flex mt-8 ml-8 footer-social">
                                    <li><a href="javascript:void(0)"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-instagram-original"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="lni-linkedin-original"></i></a>
                                    </li>
                                </ul>
                            </div> <!-- footer logo -->

                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6">
                        <div class="mb-8 footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                <li><a href="https://wa.me/6281523651797?text=Halo,%20saya%20ingin%20menghubungi%20admin%20untuk%20meminta%20pengalangan%20dana">Contact via WhatsApp</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="w-full sm:w-7/12 md:w-1/2 lg:w-1/3">
                        <h6 class="footer-title">Share</h6>
                        <button id="shareButton" class="bg-gray-300 hover:bg-gray-400 px-6 py-3 rounded-full">Share</button>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->

        <div class="bg-blue-900 footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <div class="py-6 text-center">
                            <p class="text-white">
                                by
                                <a class="text-blue-500 duration-300 hover:text-blue-700" rel="nofollow" href="https://tailwindcss.com">Tailwind</a>
                            </p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>


    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Validator js ======-->
    <script src="assets/js/validator.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script>
        document.getElementById("shareButton").addEventListener("click", function() {
            // Salin URL halaman ke clipboard
            var url = window.location.href;

            // Buat elemen input untuk menampung URL
            var input = document.createElement("input");
            input.setAttribute("value", url);
            document.body.appendChild(input);

            // Salin URL dari input ke clipboard
            input.select();
            document.execCommand("copy");

            // Hapus elemen input
            document.body.removeChild(input);

            // Tampilkan pesan sukses
            alert("URL telah disalin ke clipboard: " + url);
        });
    </script>
    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("profileDropdown");
            if (dropdown.classList.contains("hidden")) {
                dropdown.classList.remove("hidden");
            } else {
                dropdown.classList.add("hidden");
            }
        }
    </script>

</body>

</html>