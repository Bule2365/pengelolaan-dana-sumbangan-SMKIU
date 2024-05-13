<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Include the Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="container mx-auto mt-10 px-4">
        <h1 class="text-3xl mb-8 text-center">Informasi Donasi</h1>
        <div class="bg-white rounded-lg shadow-md p-6">
            <a href="{{ route('user.homepage') }}" class="btn btn-primary mb-4 inline-block">
                Kembali ke Beranda
            </a>
            <p class="mb-4">Selamat datang di halaman informasi donasi.</p>
            <p class="mb-4">Berikut adalah langkah-langkah untuk melakukan donasi:</p>
            <ol class="list-decimal list-inside mb-4">
                <li>Pilih penggalangan dana yang ingin Anda sumbangi.</li>
                <li>Klik tombol "Donasi sekarang" untuk menuju halaman donasi.</li>
                <li>Masukkan jumlah uang yang ingin Anda sumbangkan.</li>
                <li>Klik tombol "Donasi" untuk menyelesaikan proses donasi.</li>
            </ol>
            <a href="{{ route('user.listDonasi') }}" class="inline-block">
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full">
                    Donasi Sekarang
                </button>
            </a>
            <p class="mt-6 text-center text-gray-600">Setiap sumbangan Anda memberi harapan baru dan membuat dunia menjadi tempat yang lebih baik. Mari kita bersama-sama berbuat kebaikan!</p>
        </div>
    </div>
</body>

</html>