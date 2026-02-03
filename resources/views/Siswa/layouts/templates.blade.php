<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
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

    @yield('content')



<!-- CONTENT -->

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

    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
