<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Detail Transaksi Donasi</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama User: {{ $donation->user->name }}</h5>
                <p class="card-text">Judul Penggalangan Dana: {{ $donation->penggalanganDana->judul }}</p>
                <p class="card-text">Jumlah Uang Disumbangkan: Rp {{ number_format($donation->jumlah_uang, 2) }}</p>
                <p class="card-text">Tanggal: {{ $donation->created_at }}</p>
            </div>
        </div>
        <!-- Tombol untuk mencetak laporan -->
        <div class="mt-3">
            <a href="{{ route('admin.cetakLaporanSatu', $donation->id) }}" class="btn btn-primary">Cetak Laporan</a>
            <!-- Tombol untuk kembali ke halaman transaksi -->
            <a href="{{ route('admin.transaksi') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</body>

</html>