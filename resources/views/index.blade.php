<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--====== Title ======-->
    <title>Bersama</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../images/logobersama.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== tailwind css ======-->
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    #home {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        /* Adjust as needed */
    }
</style>

<body>
    <!-- NOTIFICATION LOGIN -->

    <div id="confirmation-card">
        <p>Apakah anda bersedia login terlebih dahulu</p>
        <button class="gradient-btn" onclick="proceed()">Ya</button>
        <button class="gradient-btn" onclick="cancel()">Tidak</button>
    </div>
    <!---->

    <!-- Overlay -->
    <div id="overlay"></div>

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
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#service">Tentang kami</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">Testimonial</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="items-center justify-end hidden navbar-social lg:flex">
                            </div>
                            <ul class="flex footer-social">
                                <div class="flex items-center  border-b-2 bg-transparent border-teal-500 py-2">

                                    <span class="mr-4 font-bold text-gray-900 text uppercase">
                                        <a href="{{ route('login') }}">Login</a> /
                                        <a href="{{ route('register') }}">Register</a>
                                    </span>
                                </div>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        </div> <!-- navgition -->
    </header>
    <div id="content" class="md:ml-64">
        <!-- ... (Your existing content) ... -->

        <!-- Toggle Sidebar Button -->
        <button onclick="toggleSidebar()" class="md:hidden fixed top-0 left-0 m-4 focus:outline-none">
            <span class="text-white">&#x2194;</span>
        </button>
    </div>

    <div id="home" class="relative z-10 header-hero" style="background-image: url(../images/header-bg.jpg)">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-5/6 xl:w-2/3">
                    <div class="pt-48 pb-64 text-center header-content">
                        <h3 class="mb-5 text-3xl font-semibold leading-tight text-gray-900 md:text-5xl">Aplikasi Pengelolaan Dana Sumbangan</h3>
                        <p class="px-5 mb-10 text-xl text-gray-700">Sebuah aplikasi untuk menyalurkan dan mengadakan penggalangan dana yang praktis dan amanah</p>
                        <ul class="flex flex-wrap justify-center">
                            <li><a class="mx-3 main-btn gradient-btn" href="{{ route('login') }}">Login segera</a></li>
                        </ul>
                    </div> <!-- header content -->
                </div>
            </div> <!-- row -->
        </div>
    </div>
    <div class="container mt-10 text-center">
        <div class="text-3xl font-semibold text-gray-900">Hallo user</div>
        <div id="typing-text" class="text-3xl font-semibold text-gray-900"></div>
    </div>

    <!-- container -->
    <div class="absolute bottom-0 z-20 w-full h-auto -mb-1 header-shape">
        <img src="../images/header-shape.svg" alt="shape">
    </div>
    </div>
    <section id="service" class="relative services-area py-120 fade-in">
        <div class="container">
            <div class="flex">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 section-title">
                        <h4 class="title">Dibuat untuk </h4>
                        <p class="text">Membantu sesama manusia untuk saling berbagi melalui apapun itu</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="flex">
                <div class="w-full lg:w-2/3">
                    <div class="row">
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-bolt"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title">Cepat</h4>
                                    <p class="text">Dana sumbangan anda akan cepat untuk di salurkan</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-shield"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title">Amanah & Terlindungi</h4>
                                    <p class="text">Dana yang disalurkan akan selalu amanah dan terjaga</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-hand"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title">Merata</h4>
                                    <p class="text">Dana yang di salurkan akan merata untuk semua</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-bulb"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title">Penampungan ide</h4>
                                    <p class="text">Siap untuk slalu menampung semua aspirasi user</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- row -->
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="services-image">
            <div class="image">
                <img src="../images/services.png" alt="Services">
            </div>
        </div> <!-- services image -->
    </section>
    <section id="call-to-action" class="relative overflow-hidden bg-blue-600 call-to-action fade-in">
        <div class="absolute top-0 left-0 w-1/2 h-full call-action-image">
            <img src="../images/call-to-action.png" alt="call-to-action">
        </div>

        <div class="container-fluid">
            <div class="justify-end row">
                <div class="w-full lg:w-1/2">
                    <div class="py-32 mx-auto text-center call-action-content">
                        <h2 class="mb-5 text-5xl font-semibold leading-tight text-white">Dukung Kami dengan SUBSCRIBE</h2>
                        <p class="mb-6 text-white">Karna dukungan kalian sangat berharga bagi kami</p>

                    </div> <!-- slider-content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section id="testimonial" class="testimonial-area py-120 fade-in">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">Testimonial</h4>
                        <p class="text"> Happiness </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <div class="row">
                <div class="w-full">
                    <div class="row testimonial-active">
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="../images/user.png" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300 "> Aplikasi Dana Sumbangan ini luar biasa praktis! Donasi jadi lebih mudah dan menyenangkan. Antarmukanya simpel, transparansinya tinggi, dan notifikasinya membantu saya tetap terhubung dengan proyek yang saya dukung. Pokoknya top deh! </p>
                                    <h6 class="text-lg font-semibold text-gray-900">Sarah Indah</h6>
                                    <span class="text-sm text-gray-700">Pemilik panti asuhan</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="../images/user.png" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Aplikasi Dana Sumbangan ini keren banget! Gak ribet, cepat, dan jelas. Suka banget dengan opsi proyek yang beragam dan laporan yang detail. Notifikasinya juga bikin terus up to date dengan perkembangan sumbangan. Dengan aplikasi ini, memberi menjadi lebih bermakna. Terima kasih tim pengembang, sukses terus! 👏🏻🌟</p>
                                    <h6 class="text-lg font-semibold text-gray-900"> Dini Rahmawati</h6>
                                    <span class="text-sm text-gray-700">Pendiri Asrama</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="../images/user.png" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Aplikasi Dana Sumbangan sungguh memudahkan saya dalam memberikan dukungan kepada berbagai kegiatan amal. Desainnya yang simpel membuat penggunaan menjadi intuitif, dan fitur notifikasi memberikan pembaruan yang sangat diperlukan. Saya merasa lebih terhubung dengan tujuan baik ini. Saya harap semakin banyak orang yang bergabung untuk bersama-sama menciptakan perubahan positif. Terima kasih, tim pengembang, atas inovasi luar biasa ini! 👍🏽🌺</p>
                                    <h6 class="text-lg font-semibold text-gray-900">Adi Prasetyo</h6>
                                    <span class="text-sm text-gray-700">penggiat kemanusiaan</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="../images/user.png" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Aplikasi Dana Sumbangan adalah jawaban bagi saya yang ingin memberikan kontribusi nyata. Penggunaannya yang mudah dan efisien membuat proses donasi menjadi menyenangkan. Saya juga sangat mengapresiasi transparansi dalam pelaporan penggunaan dana. Dengan aplikasi ini, saya merasa bahwa setiap sumbangan saya benar-benar membuat perbedaan. Terima kasih, tim pengembang, atas upaya luar biasa kalian dalam menciptakan platform amal yang begitu bermanfaat! 🙏🏻🌟</p>
                                    <h6 class="text-lg font-semibold text-gray-900">Fajar Siddiq</h6>
                                    <span class="text-sm text-gray-700">CEO, MakerFlix</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL THREE PART ENDS ======-->

    <!--====== CLIENT LOGO PART START ======-->

    <section class="py-16 bg-gray-100 client-logo-area fade-in">
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
                                    <li><a href="javascript:void(0)"><i class="lni-instagram-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-linkedin-original"></i></a></li>
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
                                <li><a href="javascript:void(0)">About</a></li>
                                <li><a href="javascript:void(0)">Contact</a></li>
                                <li><a href="javascript:void(0)">Career</a></li>

                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <div class="mb-8 footer-link">
                            <h6 class="footer-title">Product & Services</h6>
                            <ul>
                                <li><a href="javascript:void(0)">Products</a></li>
                                <li><a href="javascript:void(0)">Business</a></li>
                                <li><a href="javascript:void(0)">Developer</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="w-full sm:w-5/12 md:w-1/3 lg:w-1/4">
                        <div class="mb-8 footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="javascript:void(0)">Support Center</a></li>
                                <li><a href="javascript:void(0)">FAQ</a></li>
                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
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

    <script>
        // JavaScript function to toggle the class for the sidebar
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var content = document.getElementById("content");

            sidebar.classList.toggle("hidden");
            content.classList.toggle("md:ml-0");

            // Close the sidebar if it's open when the toggle button is clicked again
            if (!sidebar.classList.contains("hidden") && window.innerWidth >= 768) {
                toggleSidebar();
            }
        }

        // Close the sidebar on larger screens when the window is resized
        window.addEventListener('resize', function() {
            var sidebar = document.getElementById("sidebar");

            if (window.innerWidth >= 768 && !sidebar.classList.contains("hidden")) {
                toggleSidebar();
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <script>
        const texts = [
            "Selamat datang ",
            "Ayok berbagi bersama ",
            "Selamat menunaikan ibadah puasa "
        ];
        let textIndex = 0;

        function startTyping() {
            let index = 0;
            const typingTextElement = document.getElementById("typing-text");
            const interval = setInterval(function() {
                typingTextElement.textContent += texts[textIndex][index];
                index++;
                if (index === texts[textIndex].length) {
                    clearInterval(interval);
                    setTimeout(function() {
                        clearText(typingTextElement);
                        textIndex = (textIndex + 1) % texts.length;
                        setTimeout(startTyping, 500);
                    }, 2000);
                }
            }, 100);
        }

        function clearText(element) {
            element.textContent = "";
        }

        window.onload = function() {
            startTyping();
        };
    </script>
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

</body>

</html>