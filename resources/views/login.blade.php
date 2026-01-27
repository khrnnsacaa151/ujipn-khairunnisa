<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Sistem Pengaduan Sarana Sekolah</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

<div class="login-card">
    <div class="login-header">
        <img src="{{ asset('img/logopn.png') }}" alt="Logo Sekolah">
        <h1>SISTEM PENGADUAN SARANA<br>SEKOLAH</h1>
        <p>Santun dalam Pribadi, Tangguh dalam Prestasi</p>
    </div>

    <div class="login-body">
        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    required
                >
            </div>

            <div class="form-group">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit" class="btn-login">MASUK</button>
        </form>
    </div>

    <div class="login-footer">
        © 2026 Sistem Pengaduan Sarana Sekolah
    </div>
</div>

</body>
</html>
