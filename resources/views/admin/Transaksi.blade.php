<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi | Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Tambahkan link Tailwind CSS di sini -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <div class="container mt-3 flex items-center mb-4 justify-start">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-3 rounded-full transition duration-500 ease-in-out mr-2">
                <i class="fi fi-rr-home mr-2"></i>
                <span>Kembali ke Dashboard</span>
            </a>
        </div>
        <h2 class="text-2xl font-bold text-center mb-6 text-blue-500">Transaksi Donasi</h2>
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Nama User</th>
                    <th class="px-4 py-2">Judul Penggalangan Dana</th>
                    <th class="px-4 py-2">Jumlah Uang disumbangkan</th>
                    <th class="px-4 py-2">Tanggal</th>
                    <th class="px-4 py-2">Cetak Laporan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donations as $index => $data)
                <tr class="{{ $index % 2 === 0 ? 'bg-gray-200' : '' }} hover:bg-gray-300 duration-300 hover:shadow-lg">
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $data->user->name }}</td>
                    <td class="border px-4 py-2">{{ $data->penggalanganDana->judul }}</td>
                    <td class="border px-4 py-2">Rp {{ number_format($data->jumlah_uang, 2) }}</td>
                    <td class="border px-4 py-2">{{ $data->created_at }}</td>
                    <td class="border px-4 py-2">
                        <!-- Tombol untuk mencetak satu transaksi -->
                        <a href="{{ route('admin.showTransaction', $data->id) }}" class="btn btn-secondary">Lihat Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Tombol untuk mencetak semua transaksi -->
        <a href="{{ route('admin.cetakLaporanSemua') }}" class="btn btn-primary mt-4 inline-block">Cetak Laporan Semua</a>
    </div>

</body>

</html>