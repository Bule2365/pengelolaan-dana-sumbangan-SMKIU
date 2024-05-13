<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat | Penggalangan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .btn-primary {
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #2563eb;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-5">
        <div class="max-w-md mx-auto bg-white p-8 border shadow-lg rounded-lg">
            <h2 class="text-2xl font-semibold text-center mb-6">Buat Penggalangan Dana Baru</h2>
            <a href="{{ route('admin.penggalangan') }}" class="flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 font-semibold py-3 px-6 rounded-full mb-4 transition duration-300 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.414 10l4.293-4.293a1 1 0 011.414 1.414L9.828 10l3.88 3.879a1 1 0 01-1.414 1.414L7.414 11.414a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                Kembali ke Halaman Penggalangan
            </a>
            <form action="{{ route('admin.storePenggalangan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-semibold mb-2">Judul</label>
                    <input type="text" class="form-input w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200" id="judul" name="judul" required>
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                    <textarea class="form-textarea w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="target_dana" class="block text-gray-700 font-semibold mb-2">Target Dana</label>
                    <div class="flex items-center border border-gray-300 rounded-md">
                        <span class="px-3 border-r border-gray-300">
                            Rp
                        </span>
                        <input type="number" class="form-input flex-grow rounded-none rounded-r-md focus:border-blue-500 focus:ring focus:ring-blue-200" id="target_dana" name="target_dana" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="tanggal_selesai" class="block text-gray-700 font-semibold mb-2">Tanggal Selesai</label>
                    <input type="date" class="form-input w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200" id="tanggal_selesai" name="tanggal_selesai" required>
                </div>
                <div class="mb-4">
                                <label for="gambar" class="block text-sm font-medium text-gray-600">Gambar</label>
                                <input type="file" accept=".jpg, .pdf, .png, .gif"
                                    class="mt-1 p-2 w-full border rounded-md @error('gambar') border-red-500 @enderror"
                                    id="gambar" name="gambar" onchange="displayImage()">
                                @error('gambar')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                </div>
                <img id="imagePreview" class="mb-4 max-h-96 mx-auto" alt="Image Preview">

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-full transition duration-300 ease-in-out w-full">Submit</button>
            </form>
        </div>
    </div>
    <script>
        function displayImage() {
            const input = document.getElementById('gambar');
            const preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>