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
    <h3>{{ $title }}</h3>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>
        
        <!-- CONTENT -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>

</div>

</body>
</html>
