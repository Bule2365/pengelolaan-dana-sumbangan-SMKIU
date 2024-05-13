<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggalangan</title>
    <!-- Tautan CSS Tailwind dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Kx7xhBLGT5ryyuyZV2LsvhQrguVpA8FZn9G2zb3BEEpka6aMWK0ezM1x8L0yUVDWYlJObJpdrSr8wfpi0w6eCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        ul li {
            margin-bottom: 20px;
        }

        .bg-slate-50 {
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
        }

        .collapsible {
            max-height: 100px;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
        }

        .collapsible.expanded {
            max-height: 1000px;
            /* Sesuaikan nilai berdasarkan kebutuhan */
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-end">
    <div class="container mx-auto mt-8 w-full">
        <div class="container mt-3 flex items-center mb-4 justify-start">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-3 rounded-full transition duration-500 ease-in-out mr-2">
            <i class="fi fi-rr-home mr-2"></i>
                <span>Kembali ke Dashboard</span>
            </a>
        </div>
        <h1 class="text-3xl font-semibold text-center">Daftar Penggalangan Dana</h1>
        <div class="container mt-3 flex justify-center">
            <a href="{{ route('admin.createPenggalangan') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded transition duration-300 ease-in-out">Buat Penggalangan</a>
        </div>
        <div class="flex justify-center mt-4">
            <div class="w-full max-w-md">
                <!-- Form pencarian -->
                <form action="{{ route('admin.searchPenggalangan') }}" method="GET" class="flex bg-white border border-gray-200 rounded-md overflow-hidden shadow-md">
                    <input class="form-input flex-grow px-4 py-2" type="search" name="search" placeholder="Cari judul penggalangan" aria-label="Search">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            @foreach($penggalangan as $data)
            @if(now()->lte($data->tanggal_selesai)) <!-- Tampilkan hanya jika tanggal selesai belum lewat -->
            <div class="flex flex-col justify-between max-w-xs bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/'.$data->gambar) }}" class="h-40 w-full object-cover" alt="Gambar Penggalangan">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $data->judul }}</div>
                    <div class="collapsible" id="collapsibleDesc{{ $data->id }}">
                        <p class="text-gray-600 mt-4">{{ $data->deskripsi }}</p>
                    </div>
                    <button onclick="toggleCollapsible('{{ $data->id }}');" class="text-blue-500 cursor-pointer focus:outline-none">
                                    Read More
                        </button>                
                    </div>
                <div class="px-6 pt-4 pb-2">
                    <p class="text-gray-700">Target Dana: Rp {{ number_format($data->target_dana, 2) }}</p>
                    <p class="text-gray-700">Tanggal Selesai: {{ $data->tanggal_selesai }}</p>
                    <p class="text-gray-700">Nominal Sekarang: Rp {{ number_format($data->total_donation, 2) }}</p>
                    @if($data->total_donation >= $data->target_dana)
                    <p class="text-green-500 font-semibold">Status: Donasi Terpenuhi</p>
                    @else
                    <p class="text-red-500 font-semibold">Status: Donasi Belum Terpenuhi</p>
                    @endif
                </div>
                <div class="px-6 pt-4 pb-2 flex justify-center">
                    <form action="{{ route('admin.penggalangan.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex items-center justify-center text-red-600 hover:text-red-900 bg-red-100 hover:bg-red-200 rounded-full py-1 px-2 transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.285 5.879a2 2 0 012.83 0l.2.201.2-.2a2 2 0 112.829 2.828l-.199.201-.2.199a2 2 0 01-2.83 0l-.199-.2-.201-.199a2 2 0 010-2.828zM10 2a3 3 0 012.12 5.121l-.122.122 1.414 1.414 1.121-1.121a1 1 0 111.414 1.415l-1.12 1.12 1.121 1.12a1 1 0 01-1.415 1.415l-1.12-1.12-1.121 1.12a1 1 0 01-1.414-1.415l1.12-1.12-1.12-1.12A3 3 0 0110 2zm1.586 3.586L11 6l1 1-1.414 1.414L10 7.828l-1 1L7.586 7.414 6 9l-1-1 1.414-1.414L6.172 7l1-1 1.414 1.414L9.828 8l1.414-1.414z" clip-rule="evenodd" />
                            </svg>
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <script>
        function toggleCollapsible(elementId) {
            const collapsibleElement = document.getElementById('collapsibleDesc' + elementId);
            collapsibleElement.classList.toggle('expanded');
        }
    </script>
</body>

</html>