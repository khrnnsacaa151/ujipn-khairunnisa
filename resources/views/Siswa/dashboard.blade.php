<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
    <div class="topbar-left">
        <span class="menu-icon">☰</span>
        <h3>Dashboard Siswa</h3>
    </div>

    <!-- USER MENU -->
    <div class="user-menu" onclick="toggleDropdown()">
        <i class="fa-solid fa-user-circle"></i>
        <span class="username">{{ auth()->user()->username }}</span>
        <i class="fa-solid fa-caret-down"></i>

        <!-- DROPDOWN -->
        <div class="dropdown" id="userDropdown">
            <a href="#">Profile</a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-link">Logout</button>
            </form>
        </div>
    </div>
</div>

<!-- CONTENT -->
<div class="content">

    <h2 class="welcome">
        Selamat datang, <span>{{ auth()->user()->nama }} ({{ auth()->user()->siswa->kelas }})</span>
    </h2>

    <!-- STAT CARD -->
    <div class="stat-wrapper">
        <div class="stat-card blue">
            <p>Total Aspirasi</p>
            <h1>{{ $total_aspirasi }}</h1>
        </div>

        <div class="stat-card orange">
            <p>Menunggu</p>
            <h1>{{ $aspirasi_menunggu }}</h1>
        </div>

        <div class="stat-card green">
            <p>Diproses</p>
            <h1>{{ $aspirasi_diproses }}</h1>
        </div>

        <div class="stat-card teal">
            <p>Selesai</p>
            <h1>{{ $aspirasi_selesai }}</h1>
        </div>
    </div>

    <!-- BUTTON -->
    <div class="btn-wrapper">
        <a href="#" class="btn-aspirasi">+ Ajukan Aspirasi</a>
    </div>

    <!-- TABLE -->
    <div class="card">
        <h3>Riwayat Aspirasi</h3>

        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Detail Aduan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aspirasi as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori->nama_kategori }}</td>
                    <td>{{ $item->isi }}</td>
                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                    <td><span class="badge {{ $item->status }}" style="text-transform: capitalize;">{{ $item->status }}</span></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
<script>
function toggleDropdown() {
    document.getElementById("userDropdown").classList.toggle("show");
}

// klik di luar dropdown = nutup
window.onclick = function(event) {
    if (!event.target.closest('.user-menu')) {
        document.getElementById("userDropdown").classList.remove("show");
    }
}
</script>
</body>
</html>
