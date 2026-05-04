<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            padding: 50px;
            background-color: #fff;
            color: #1b1b18;
            line-height: 1.6;
        }

        h1 {
            font-size: 32px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .btn-logout {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-logout:hover {
            background-color: #0b5ed7;
        }

        .footer-text {
            margin-top: 50px;
            font-size: 14px;
            font-weight: 700; /* Bold seperti di foto */
        }
    </style>
</head>
<body>

    {{-- Menampilkan Nama User yang Login secara Dinamis --}}
    <h1>Selamat datang, {{ Auth::user()->name ?? 'Admin Super' }}</h1>

    {{-- Form Logout Laravel --}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn-logout">
            Logout
        </button>
    </form>

    <div class="footer-text">
        Jika tombol logout di-klik maka keluar dari autentikasi dan kembali ke halaman login
    </div>

</body>
</html>