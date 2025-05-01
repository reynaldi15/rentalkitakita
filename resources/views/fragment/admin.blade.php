<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Rental Mobil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('galleries.index') }}">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blogs.index') }}">Blog</a></li>
            </ul>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-light" type="submit">Logout</button>
        </form>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
    @yield('scripts')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
