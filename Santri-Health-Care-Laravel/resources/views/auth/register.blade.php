<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Santri Health Care</title>

    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body class="login-body">

    <main class="login-wrapper">

        <!-- Icon -->
        <img 
            src="{{ asset('img/login.png') }}" 
            alt="User Icon" 
            class="login-icon"
        >

        <!-- Headline -->
        <h1 class="login-title">
            Hai! Selamat Datang Kembali!
        </h1>

        <!-- Sub headline -->
        <p class="login-subtitle">
            Login Akun Kamu
        </p>

        <!-- Form -->
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <input 
                type="email"
                name="email"
                placeholder="email"
                required
            >

            <input 
                type="text"
                name="name"
                placeholder="Nama Pengguna"
                required
            >

            <input 
                type="password"
                name="password"
                placeholder="Kata Sandi"
                required
            >

            <button type="submit">
                Daftar
            </button>
        </form>

    </main>

</body>
</html>
