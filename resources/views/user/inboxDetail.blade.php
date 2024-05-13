<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesan Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .feedback-detail {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .feedback-detail p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn-back {
            display: block;
            width: 100%;
            max-width: 200px;
            margin: 20px auto 0;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Detail Pesan Surat</h1>
    <div class="feedback-detail">
        <p>Hai {{ Auth::user()->name }},</p>
        <p>Kami ingin menyampaikan rasa terima kasih yang tulus atas kontribusi Anda dalam mendukung penggalangan dana "{{ $judulPenggalangan }}".</p>
        @if($feedback->sumbangan)
        <p>Dengan donasi sebesar Rp {{ number_format($feedback->sumbangan->jumlah_uang, 2) }}, Anda telah memberikan harapan dan keceriaan kepada mereka yang membutuhkan. Kami sangat menghargai kebaikan hati Anda.</p>
        @endif
        <p>Kami sangat bersyukur atas partisipasi Anda yang telah membantu kami mencapai tujuan penggalangan dana ini.</p>
        <p>Kami berharap semoga Anda senantiasa diberkahi dalam segala hal dan rezeki Anda dilipatgandakan.</p>
        <p>Terima kasih sekali lagi atas dukungan Anda yang luar biasa.</p>
        <p>Hormat kami,</p>
        <p>Tim Pengelola Dana</p>
    </div>
    <!-- Tambahkan tombol untuk kembali -->
    <a href="{{ route('user.inbox') }}" class="btn btn-back">Kembali</a>
</body>

</html>