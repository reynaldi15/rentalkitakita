<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard - Rental Mobil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body style="background-color: grey;">
    <!-- Toggle Button (Only on Mobile) -->
    <!-- Hamburger Button (Muncul hanya di HP) -->
    <button id="menu-toggle" class="btn btn-outline-secondary d-md-none m-3">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar bg-dark text-white">
        <div class="sidebar-header text-center py-3 border-bottom">
            <a class="navbar-brand text-white fw-bold" href="{{ route('dashboard') }}">
                KitaKita Rent Car
            </a>
            <button class="btn btn-sm btn-danger d-md-none close-sidebar mt-2">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <ul class="nav flex-column p-3">
            <li class="nav-item">
                <a class="nav-link text-danger fw-bold" href="{{ route('dashboard') }}">
                    <i class="fas fa-box me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger fw-bold" href="{{ route('cars.index') }}">
                    <i class="fas fa-car me-2"></i> Armada
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger fw-bold" href="{{ route('galleries.index') }}">
                    <i class="fas fa-image me-2"></i> Galeri
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger fw-bold" href="{{ route('testimonis.index') }}">
                    <i class="fas fa-box me-2"></i> Testimoni
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger fw-bold" href="{{ route('blogs.index') }}">
                    <i class="fas fa-blog me-2"></i> Kontak
                </a>
            </li>
        </ul>
    </aside>

    <div class="container mt-4" style="margin-left: 250px; padding-right: 60px">
        @yield('content')
    </div>
    <!-- @yield('scripts') -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>