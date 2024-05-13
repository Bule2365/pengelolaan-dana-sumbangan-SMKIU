<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

<body class="bg-gray-100">
    <div class="container mx-auto mt-5 px-4">
        <a href="{{ route('user.homepage') }}" class="inline-block mb-4 px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-full transition duration-300 ease-in-out hover:no-underline">
            Back to Homepage
        </a>
        <h2 class="text-2xl mb-4 text-blue-500">Silahkan lakukan Donasi</h2>
        <p class="mb-4 text-gray-700">Tidak tahu bagaimana cara melakukan nya? <a href="{{ route('user.informasiDonasi') }}" class="text-blue-500 transition-colors duration-300 ease-in-out hover:no-underline">Klik disini</a></p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($penggalangan as $data)
            @if(now()->lte($data->tanggal_selesai)) <!-- Tampilkan hanya jika tanggal selesai belum lewat -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('storage/'.$data->gambar) }}" class="w-full h-64 object-cover object-center" alt="Donasi Image">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $data->judul }}</h2>
                    <div class="collapsible" id="collapsibleDesc{{ $data->id }}">
                        <p class="text-gray-600 mt-4">{{ $data->deskripsi }}</p>
                    </div>
                    <button onclick="toggleCollapsible('{{ $data->id }}');" class="text-blue-500 cursor-pointer focus:outline-none">
                                    Read More
                        </button>
                    <p class="text-gray-600 mt-2">Target Dana: Rp {{ number_format($data->target_dana, 2) }}</p>
                    <p class="text-gray-600">Tanggal Selesai: {{ $data->tanggal_selesai }}</p>
                    <p class="text-gray-600">Total Donasi Masuk: Rp {{ number_format($data->total_donation, 2) }}</p>
                    @if($data->total_donation >= $data->target_dana)
                    <p class="text-green-600 font-semibold mt-2">Status: Donasi Terpenuhi</p>
                    @else
                    <p class="text-red-600 font-semibold mt-2">Status: Donasi Belum Terpenuhi</p>
                    <a href="{{ route('user.donasi', ['id' => $data->id]) }}" class="inline-block mt-2 px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-full transition duration-300 ease-in-out hover:no-underline">Donasi Sekarang</a>
                    @endif
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