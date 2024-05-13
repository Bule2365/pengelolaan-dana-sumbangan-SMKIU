<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <div class="flex items-center mb-6">
                <a href="{{ route('user.profileAkun') }}" class="flex items-center text-blue-500 hover:text-blue-600">
                    <i class="bi bi-arrow-left text-xl mr-2"></i>
                    <span class="font-bold">Kembali</span>
                </a>
            </div>
            <h1 class="text-2xl font-bold mb-6 text-center">Ganti Password</h1>
            <form action="{{ route('user.updatePassword') }}" method="POST">
                @csrf
                <div class="mb-4 relative">
                    <label for="current_password" class="block text-gray-700">Password Saat Ini</label>
                    <input type="password" class="form-input mt-1 block w-full pr-10" id="current_password" name="current_password" required>
                    <button type="button" class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-500" onclick="togglePassword('current_password')">
                        <i id="current_password_toggle" class="bi bi-eye"></i>
                    </button>
                </div>

                <div class="mb-4 relative">
                    <label for="new_password" class="block text-gray-700">Password Baru</label>
                    <input type="password" class="form-input mt-1 block w-full pr-10" id="new_password" name="new_password" required>
                    <button type="button" class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-500" onclick="togglePassword('new_password')">
                        <i id="new_password_toggle" class="bi bi-eye"></i>
                    </button>
                </div>

                <div class="mb-6 relative">
                    <label for="new_password_confirmation" class="block text-gray-700">Konfirmasi Password Baru</label>
                    <input type="password" class="form-input mt-1 block w-full pr-10" id="new_password_confirmation" name="new_password_confirmation" required>
                    <button type="button" class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-500" onclick="togglePassword('new_password_confirmation')">
                        <i id="new_password_confirmation_toggle" class="bi bi-eye"></i>
                    </button>
                </div>

                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Simpan</button>
            </form>
            @if ($errors->any())
            <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Kesalahan!</strong>
                <span class="block sm:inline">Kata sandi saat ini salah.</span>
            </div>
            @endif
        </div>
    </div>

    <script>
        function togglePassword(inputId) {
            var input = document.getElementById(inputId);
            var toggle = document.getElementById(inputId + '_toggle');

            if (input.type === "password") {
                input.type = "text";
                toggle.classList.remove("bi-eye");
                toggle.classList.add("bi-eye-slash");
            } else {
                input.type = "password";
                toggle.classList.remove("bi-eye-slash");
                toggle.classList.add("bi-eye");
            }
        }
    </script>
</body>

</html>