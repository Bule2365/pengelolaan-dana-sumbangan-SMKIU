<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-8 mb-8">
        <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-bold text-center text-blue-500 mb-4">Donasi untuk Penggalangan Dana</h2>
            <a href="{{ route('user.listDonasi') }}" class="block w-full mb-2 text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">Kembali</a>
            <img src="{{ asset('storage/'.$penggalangan->gambar) }}" class="mx-auto mb-4 rounded-lg" alt="Gambar Penggalangan Dana">
            <h3 class="text-xl font-bold text-center mb-2">{{ $penggalangan->judul }}</h3>
            <div class="bg-gray-200 p-4 rounded-md mb-4">
                <p class="text-sm">{{ $penggalangan->deskripsi }}</p>
            </div>
            <p class="text-sm mb-2">Target Dana: Rp {{ number_format($penggalangan->target_dana, 2) }}</p>
            <p class="text-sm mb-2">Tanggal Selesai: {{ $penggalangan->tanggal_selesai }}</p>
            <p class="text-sm mb-2">Total Donasi: Rp {{ number_format($penggalangan->total_donation, 2) }}</p>
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative mb-2" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif
            @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative mb-2" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
            @endif
            <form action="{{ route('sumbangan.store') }}" method="POST">
                @csrf
                <input type="hidden" name="penggalangan_dana_id" value="{{ $penggalangan->id }}">
                <div class="mb-4">
                    <label for="jumlah_uang" class="block text-sm font-medium text-gray-700">Jumlah Uang</label>
                    <input type="number" id="jumlah_uang" name="jumlah_uang" min="0" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">Donasi Sekarang</button>
            </form>
        </div>
    </div>
</body>

</html>