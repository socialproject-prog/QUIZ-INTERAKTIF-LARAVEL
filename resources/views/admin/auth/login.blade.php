<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Quiz Interaktif</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="login-body">

<div class="login-card">

    <a href="{{ route('home') }}" class="brand login-brand">
        <span class="brand-mark">Q</span>
        <span>Quiz Interaktif</span>
    </a>

    <div class="login-heading">
        <h1>Masuk sebagai Admin</h1>
        <p>Kelola kuis, soal, timer, peserta, dan hasil.</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('admin.login.submit') }}" method="POST" class="stack-form">
        @csrf

        <label class="field">
            <span>Email</span>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Masukkan email admin"
                required
                autofocus
            >
        </label>

        <label class="field">
            <span>Kata sandi</span>
            <input
                type="password"
                name="password"
                placeholder="Masukkan password"
                required
            >
        </label>

        <label class="check-row">
            <input type="checkbox" name="remember" value="1">
            <span>Ingat saya</span>
        </label>

        <button type="submit" class="btn btn-primary btn-block">
            Masuk ke Dashboard
        </button>

    </form>

</div>

</body>
</html>