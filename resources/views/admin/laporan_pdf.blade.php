<!DOCTYPE html>
<html>

<head>
    <title>Laporan Donasi PDF</title>
    <!-- Tambahkan CSS jika diperlukan -->
</head>

<body>
    <h1>Laporan Donasi</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pengguna</th>
                <th>Jumlah Donasi</th>
                <!-- Tambahkan kolom lain jika diperlukan -->
            </tr>
        </thead>
        <tbody>
            @foreach($donations as $index => $donation)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $donation->user->name }}</td>
                <td>{{ $donation->jumlah_uang }}</td>
                <!-- Tampilkan data lain jika diperlukan -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>