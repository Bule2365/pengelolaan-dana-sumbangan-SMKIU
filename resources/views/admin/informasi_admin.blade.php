<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundraising Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <style>
        /* Gaya Dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body class="bg-gray-200 lg:flex">

    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
            <!-- Loading screen -->
            <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-blue-600">
                Loading.....
            </div>

            <!-- Sidebar -->
            <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 z-10 flex w-80">
                <!-- Curvy shape -->
                <svg class="absolute inset-0 w-full h-full text-white" style="filter: drop-shadow(10px 0 10px #00000030)" preserveAspectRatio="none" viewBox="0 0 309 800" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M268.487 0H0V800H247.32C207.957 725 207.975 492.294 268.487 367.647C329 243 314.906 53.4314 268.487 0Z" />
                </svg>
                <!-- Sidebar content -->
                <div class="z-10 flex flex-col flex-1">
                    <div class="flex items-center justify-between flex-shrink-0 w-64 p-4">
                        <!-- Admin Info -->
                        <div class="dropdown" id="dropdownTrigger">
                            <div>
                                @foreach($admins as $admin)
                                <h2 class="text-xl font-semibold text-gray-800">{{ $admin->name }}</h2>
                                @endforeach
                                <p class="text-sm text-gray-500">Admin</p>
                            </div>
                            <div class="dropdown-content" id="dropdownContent">
                                <a href="{{ route('admin.informasi_admin') }}">Informasi Admin</a>
                            </div>
                        </div>
                        <!-- Close btn -->
                        <button @click="isSidebarOpen = false" class="p-1 rounded-lg focus:outline-none focus:ring">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span class="sr-only">Close sidebar</span>
                        </button>
                    </div>
                    <nav class="flex flex-col flex-1 w-64 p-4 mt-4 gap-5">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-2 text-xl hover:text-blue-400 duration-300">
                            <i class="fi fi-rr-home"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('admin.dataUser') }}" class="flex items-center space-x-2 text-xl hover:text-blue-400 duration-300">
                            <i class="fi fi-rr-user"></i>
                            <span>User</span>
                        </a>
                        <a href="{{ route('admin.penggalangan')}}" class="flex items-center space-x-2 text-xl hover:text-blue-400 duration-300">
                            <i class="fi fi-rr-wishlist-heart"></i>
                            <span>Penggalangan </span>
                        </a>
                        <a href="{{ route('admin.transaksi')}}" class="flex items-center space-x-2 text-xl hover:text-blue-400 duration-300">
                            <i class="fi fi-rr-wishlist-heart"></i>
                            <span>transaksi</span>
                        </a>
                    </nav>
                    <div class="flex-shrink-0 p-4">
                        <button class="flex items-center space-x-2">
                            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <main class="flex flex-col items-center justify-center flex-1">
                <!-- Page content -->
                <button @click="isSidebarOpen = true" class="fixed p-2 text-white bg-black rounded-lg top-5 left-5">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <span class="sr-only">Open menu</span>
                </button>
                <h1 class="sr-only">Home</h1>
                <div class="bg-gray-200">

                    <div class="lg:w-full lg:ml-64 px-6 py-8">
                        <!-- Admin Information -->
                        <div class="bg-white rounded-lg p-4 shadow-md mb-4 max-w-md mx-auto">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Informasi Admin</h2>
                            <div class="mb-4">
                                <p class="text-gray-600">Nama: {{ $admin->name }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-600">Peran: {{ $admin->role }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-600">Email: {{ $admin->email }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-600">Tanggal Lahir: {{ $admin->birthdate }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-600">Nomor Telepon: {{ $admin->number_phone }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-600">Alamat: {{ $admin->address }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-600">Jenis Kelamin: {{ $admin->gender }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var menuButton = document.getElementById('menu-button');
            var sidebar = document.getElementById('sidebar');

            menuButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
                sidebar.classList.toggle('lg:block');
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>
    <script>
        const setup = () => {
            return {
                isSidebarOpen: false,
            }
        }
    </script>
    <script>
        // Mengambil elemen-elemen HTML yang diperlukan
        const dropdownTrigger = document.getElementById('dropdownTrigger');
        const dropdownContent = document.getElementById('dropdownContent');

        // Menambahkan event listener untuk menampilkan dropdown saat elemen di klik
        dropdownTrigger.addEventListener('click', function() {
            // Toggle display none/block untuk menampilkan/menyembunyikan dropdown
            dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
        });

        // Menutup dropdown jika pengguna mengklik di luar dropdown
        window.addEventListener('click', function(event) {
            if (!dropdownTrigger.contains(event.target) && !dropdownContent.contains(event.target)) {
                dropdownContent.style.display = 'none';
            }
        });
    </script>


</body>

</html>