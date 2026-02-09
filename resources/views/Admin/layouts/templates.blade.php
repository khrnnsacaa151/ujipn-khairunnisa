<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SarPras PN | {{ $title }}</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.css">
</head>

<body>

<div class="container">

    @include('admin.layouts.sidebar')

    <!-- SIDEBAR -->


    <!-- MAIN -->
    <div class="main">

        <!-- TOPBAR -->
<div class="topbar">
            <div class="title d-flex align-items-center">
                <i class="fa fa-bars"></i>
                <h4 class="m-0">{{ $title }}</h4>
            </div>
            <div class="user-menu">
                <div class="user-triger" onclick="toggleDropdown()">
                    <i class="fa-solid fa-user-circle"></i>
                    <span>{{ auth()->user()->username }}</span>
                    <i class="fa-solid fa-caret-down"></i>
                </div>

                <div class="dropdown" id="userDropdown">
                    <a href="/profil">
                    <i class="fa fa-user"></i> Profile
                    </a>

                <form action="{{ route('logout') }}" method="POST">
                     @csrf
                        <button type="submit">
                        <i class="fa fa-right-from-bracket"></i> Logout
                        </button>
                </form>
            </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <script>
function toggleDropdown() {
    const dropdown = document.getElementById("userDropdown");
    dropdown.classList.toggle("show");
}
</script>

</div>

    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
