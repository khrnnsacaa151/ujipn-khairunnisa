<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('img/logopn.png') }}" alt="Logo">
            Dashboard Admin
        </div>

        <ul class="sidebar-menu">
    <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a href="/admin/dashboard">Dashboard</a>
    </li>

    <li class="{{ request()->is('admin/siswa') ? 'active' : '' }}">
        <a href="/admin/siswa">Data Siswa</a>
    </li>

    <li class="{{ request()->is('admin/aspirasi') ? 'active' : '' }}">
        <a href="/admin/aspirasi">Data Aspirasi</a>
    </li>

    <li class="{{ request()->is('admin/kategori') ? 'active' : '' }}">
        <a href="/admin/kategori">Kategori</a>
    </li>

    <li class="{{ request()->is('admin/laporan') ? 'active' : '' }}">
        <a href="/admin/laporan">Laporan</a>
    </li>
</ul>
    </div>

    <!-- MAIN -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar">
    <h3>Dashboard Siswa</h3>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

        <!-- CONTENT -->
        <div class="content">

            <!-- CARD INFO -->
            <div class="cards">
                <div class="card">
                    <h2>27</h2>
                    <p>Total Siswa</p>
                </div>
                <div class="card">
                    <h2>1</h2>
                    <p>Total Aspirasi</p>
                </div>
                <div class="card">
                    <h2>1</h2>
                    <p>Menunggu</p>
                </div>
                <div class="card">
                    <h2>0</h2>
                    <p>Selesai</p>
                </div>
            </div>

            <!-- TABLE -->
            <div class="table-box">
                <h3>Data Aspirasi Terbaru</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Siswa</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kebersihan Toilet</td>
                            <td>Siswa 1</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                            <td>2026-01-19</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

</body>
</html>
