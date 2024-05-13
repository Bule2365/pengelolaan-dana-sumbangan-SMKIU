<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/user.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/eye-alt.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/logobersama.png" type="image/x-icon">
    <style>
        body {
            background: rgb(11, 96, 176);
            background: radial-gradient(circle, rgba(11, 96, 176, 0.9136029411764706) 0%, rgba(64, 162, 216, 0.8631827731092436) 100%);
        }


        .register {
            background: url('');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="">
    <div class="h-screen font-sans register bg-cover mt-4">
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            <div class="w-full max-w-lg">
                <div class="leading-loose">
                    <p class="text-white font-medium text-center text-lg">REGISTER</p>
                    <form method="POST" action="{{ route('register') }}" class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl pt-5">
                        <a href="{{ route('index') }}">back</a>
                        @csrf
                        <div class="">
                            <label for="name">Nama:</label><br>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" placeholder="Your Name" type="text" id="name" name="name" required>
                        </div>

                        <div class="">
                            <label for="email">Email:</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" placeholder="Enter Email" type="email" id="email" name="email" required>
                        </div>

                        <div>
                            <label for="birthdate">Tanggal Lahir:</label><br>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="date" id="birthdate" name="birthdate" required>
                        </div>

                        <div>
                            <label for="number_phone">Nomor Telepon:</label><br>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" placeholder="+62****" type="text" id="number_phone" name="number_phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                        </div>

                        <div>
                            <label for="address">Alamat:</label><br>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="text" id="address" name="address" required>
                        </div>

                        <div>
                            <label>Jenis Kelamin:</label>
                            <div class="flex gap-1">
                                <input type="radio" id="gender_male" name="gender" value="laki-laki" required>
                                <label for="gender_male">Laki-laki</label><br>

                                <input type="radio" id="gender_female" name="gender" value="perempuan" required>
                                <label for="gender_female">Perempuan</label><br>
                            </div>
                        </div>

                        <div>
                            <label for="password">Password:</label><br>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="password" id="password" name="password" required>
                        </div>

                        <div class="mt-4 items-center flex justify-between">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded" type="submit">Daftar</button>
                            <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-black hover:text-blue-600" href="{{ route('login') }}">Sudah punya akun?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.querySelector('.gg-eye-alt');

            eyeIcon.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                }
            });
        });
    </script>
    <script>
        gsap.from(".bg-white", {
            opacity: 0,
            y: -50,
            duration: 1,
            ease: "power2.out"
        });
    </script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Registrasi </title>
</head>


<body>
    <div class="bg-purple-900 absolute top-0 left-0 bg-gradient-to-b from-gray-900 via-gray-900 to-blue-500 bottom-0 leading-5 h-full w-full overflow-hidden">
    </div>
    <div class="relative   min-h-screen  sm:flex sm:flex-row  justify-center bg-transparent rounded-3xl shadow-xl">
        <div class="flex justify-center self-center my-10 z-10">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="p-12 bg-gray-100 mx-auto rounded-3xl w-96 ">
                <div class="flex items-center justify-center mt-6">
                            <a href="{{ route('index') }}" class="text-sm text-blue-700 hover:text-blue-900 flex items-center">
                                <svg class="h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9.707 2.293a1 1 0 0 0-1.414 1.414L10.586 7H3a1 1 0 0 0 0 2h7.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l3-3a1 1 0 0 0 0-1.414l-3-3a1 1 0 0 0-.707-.293z" clip-rule="evenodd" />
                                </svg>
                                Back to Homepage
                            </a>
                        </div>
                    <div class="mb-7">
                        <h3 class="font-semibold text-2xl text-gray-800">Daftar </h3>
                    </div>
                    <div class="space-y-6">
                        <div class="">
                            <input type="text" placeholder="Nama" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" class="w-full text-sm px-4 py-3 bg-gray-200 focus:bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 text-black">
                        </div>
                        <div class="">
                            <input type="email" placeholder="Email" id="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" class="w-full text-sm px-4 py-3 bg-gray-200 focus:bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 text-black">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="">
                            <input type="date" id="birthdate" name="birthdate" value="{{ old('birthdate') }}" required class="w-full text-sm px-4 py-3 bg-gray-200 focus:bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 text-black">
                        </div>
                        <div class="">
                            <input type="tel" placeholder="Nomor Telepon" id="number_phone" name="number_phone" value="{{ old('number_phone') }}" required autocomplete="tel" class="w-full text-sm px-4 py-3 bg-gray-200 focus:bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 text-black">
                            @error('number_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="flex items-center">
                            <label for="gender" class="mr-2">Jenis Kelamin:</label>
                            <input type="radio" id="gender_male" name="gender" value="laki-laki" required>
                            <label for="gender_male" class="mr-4">Laki-laki</label>
                            <input type="radio" id="gender_female" name="gender" value="perempuan" required>
                            <label for="gender_female">Perempuan</label>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="">
                            <input type="text" placeholder="Alamat" id="address" name="address" value="{{ old('address') }}" required autocomplete="address" class="w-full text-sm px-4 py-3 bg-gray-200 focus:bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 text-black">
                        </div>
                        <div class="relative" x-data="{ show: true }">
                            <input id="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" :type="show ? 'password' : 'text'" class="text-sm px-4 py-3 rounded-lg w-full bg-gray-200 focus:bg-gray-100 border border-gray-200 focus:outline-none focus:border-blue-400 text-black">
                            <div class="flex items-center absolute inset-y-0 right-0 mr-3  text-sm leading-5">
                                <svg @click=" show = !show" :class="{ 'hidden': !show, 'block': show }" class="h-4 text-blue-700" fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                    <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                    </path>
                                </svg>
                                <svg @click=" show = !show " :class="{ 'block': !show, 'hidden': show }" class="h-4 text-blue-700" fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                    <path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                    </path>
                                </svg>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm ml-auto">
                                Sudah punya akun?
                                <a href="{{ route('login') }}" class="text-blue-700 hover:text-blue-600">
                                    Login
                                </a>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="w-full flex justify-center bg-blue-800  hover:bg-blue-700  text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-300 focus:outline-neutral-950">
                                Daftar
                            </button>
                        </div>
                        <div class="flex justify-center gap-5 w-full ">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


    <svg class="absolute bottom-0 left-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1" d="M0,0L40,42.7C80,85,160,171,240,197.3C320,224,400,192,480,154.7C560,117,640,75,720,74.7C800,75,880,117,960,154.7C1040,192,1120,224,1200,213.3C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
</body>

</html>