<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .profile-card {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to bottom, #ffffff 0%, #f0f0f0 100%);
        }

        .profile-card h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .profile-info {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .profile-info p {
            color: #555;
            margin-bottom: 10px;
        }

        .profile-info p strong {
            color: #333;
        }

        .profile-info a.change-password-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .profile-info a.change-password-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-card">
            <a href="{{ route('user.homepage') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            <h1>Profile User</h1>
            <div class="profile-info">
                <p><strong>Nama:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $user->birthdate }}</p>
                <p><strong>Nomor Telepon:</strong> {{ $user->number_phone }}</p>
                <p><strong>Alamat:</strong> {{ $user->address }}</p>
                <p><strong>Jenis Kelamin:</strong> {{ $user->gender }}</p>
                <a href="{{ route('user.password') }}" class="change-password-btn">Ganti Password</a>
            </div>
        </div>
    </div>
</body>

</html>