<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Desa Ciakar')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #667eea;
            --primary-dark: #5a67d8;
            --secondary-color: #764ba2;
            --success-color: #48bb78;
            --warning-color: #ed8936;
            --danger-color: #f56565;
            --info-color: #4299e1;
            --light-color: #f7fafc;
            --dark-color: #2d3748;
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-success: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --gradient-warning: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 20px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 8px 30px rgba(0, 0, 0, 0.12);
            --shadow-xl: 0 12px 40px rgba(0, 0, 0, 0.15);
            --border-radius: 16px;
            --border-radius-sm: 8px;
            --border-radius-lg: 24px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 120px;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.7;
            color: #2d3748;
            background: #fafafa;
            overflow-x: hidden;
            position: relative;
        }

        /* Modern Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        /* Enhanced Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 1rem 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1050;
            width: 100%;
            height: auto;
            min-height: 80px;
        }
        
        /* Navbar Toggler (Hamburger Menu) */
        .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, 0.8);
            padding: 0.5rem;
            border-radius: 8px;
            background-color: rgba(102, 126, 234, 0.2);
            transition: all 0.3s ease;
        }
        
        .navbar-toggler:hover {
            background-color: rgba(102, 126, 234, 0.3);
            transform: scale(1.05);
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.3);
            outline: none;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            width: 1.5em;
            height: 1.5em;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        /* Section positioning */
        section {
            position: relative;
            z-index: 1;
        }

        .hero-section {
            z-index: 2;
        }

        /* Ensure proper stacking context */
        .section-padding {
            position: relative;
            z-index: 10;
        }

        .carousel {
            position: relative;
            z-index: 5;
        }

        .card {
            position: relative;
            z-index: 15;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.75rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .navbar-nav .nav-link {
            font-weight: 600;
            font-size: 0.95rem;
            color: #4a5568 !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            margin: 0 0.5rem;
            padding: 0.75rem 1.25rem !important;
            border-radius: var(--border-radius-sm);
        }

        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: var(--gradient-primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
            background: rgba(102, 126, 234, 0.05);
        }

        .navbar-nav .nav-link:hover::before {
            width: 80%;
        }

        .navbar-nav .nav-link.active {
            background: var(--gradient-primary) !important;
            color: white !important;
            box-shadow: var(--shadow-md);
        }

        .navbar-nav .nav-link.active::before {
            display: none;
        }

        /* Enhanced Cards */
        .card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: var(--shadow-xl);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        /* Modern Buttons */
        .btn {
            border-radius: var(--border-radius-sm);
            font-weight: 600;
            padding: 14px 28px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
        }

        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
        }

        .btn-outline-primary:hover {
            background: var(--gradient-primary);
            color: white;
            border-color: transparent;
        }

        /* Enhanced Footer */
        .footer {
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 50%, #4a5568 100%);
            color: white;
            padding: 80px 0 30px;
            position: relative;
            overflow: hidden;
            margin-top: 4rem;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="b" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="%23667eea" stop-opacity="0.1"/><stop offset="100%" stop-color="%23667eea" stop-opacity="0"/></radialGradient></defs><circle cx="100" cy="100" r="80" fill="url(%23b)"/><circle cx="900" cy="200" r="100" fill="url(%23b)"/><circle cx="300" cy="800" r="90" fill="url(%23b)"/></svg>') no-repeat center center;
            background-size: cover;
            opacity: 0.3;
        }

        .footer h5 {
            color: #f7fafc;
            margin-bottom: 25px;
            font-weight: 700;
            position: relative;
        }

        .footer h5::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--gradient-primary);
            border-radius: 2px;
        }

        .footer a {
            color: #cbd5e0;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .footer a:hover {
            color: #667eea;
            transform: translateX(8px);
        }

        .social-links a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 8px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--gradient-primary);
            transform: translateY(-3px) scale(1.1);
            box-shadow: var(--shadow-md);
        }

        /* Floating Button Enhancement */
        .floating-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            border-radius: 50%;
            width: 65px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-primary);
            color: white;
            text-decoration: none;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            animation: pulse 2s infinite;
        }

        .floating-btn:hover {
            transform: scale(1.15);
            color: white;
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.6);
            animation: none;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            }

            50% {
                box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6), 0 0 0 10px rgba(102, 126, 234, 0.1);
            }

            100% {
                box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            }
        }

        /* Enhanced Animations */
        .fade-in-up {
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-left {
            animation: fadeInLeft 1s ease-out;
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-in-right {
            animation: fadeInRight 1s ease-out;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(40px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Enhanced Profile and Feature Icons */
        .profile-image-placeholder {
            width: 140px;
            height: 140px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }

        .profile-image-placeholder::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transform: rotate(45deg);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
            }

            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
            }
        }

        .feature-icon {
            width: 90px;
            height: 90px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: white;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
        }

        .feature-icon:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: var(--shadow-xl);
        }

        /* Utility Classes */
        .text-purple {
            color: #8b5cf6 !important;
        }

        .bg-purple {
            background-color: #8b5cf6 !important;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .section-padding {
            padding: 100px 0;
        }

        /* Ensure no overlap with fixed navbar */
        .hero-section {
            margin-top: 0;
            padding-top: 140px;
        }

        /* Fix for any floating or absolute positioned elements */
        .container,
        .container-fluid {
            position: relative;
            z-index: 1;
        }

        /* Ensure proper spacing for all content sections */
        .content-section {
            margin-top: 0;
            padding-top: 20px;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            color: #1a202c;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: 2px;
        }

        .section-subtitle {
            font-size: 1.3rem;
            color: #718096;
            margin-bottom: 4rem;
            font-weight: 400;
            line-height: 1.6;
        }

        .bg-gradient {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 50%, #f1f5f9 100%);
            position: relative;
        }

        .bg-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="%23000" opacity="0.02"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.5;
        }

        /* Page Header Styling untuk halaman tanpa hero-section */
        .page-header {
            padding-top: 140px;
            padding-bottom: 60px;
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.9) 0%, rgba(155, 89, 182, 0.9) 50%, rgba(52, 73, 94, 0.9) 100%);
            color: white;
            margin-top: 0;
            position: relative;
            z-index: 1;
        }

        .page-header h1 {
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .page-header .breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0;
        }

        .page-header .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }

        .page-header .breadcrumb-item a:hover {
            color: white;
        }

        .page-header .breadcrumb-item.active {
            color: white;
        }

        /* Responsive Enhancements */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2.2rem;
            }

            .section-subtitle {
                font-size: 1.1rem;
            }

            .section-padding {
                padding: 60px 0;
            }

            .floating-btn {
                width: 55px;
                height: 55px;
                bottom: 20px;
                right: 20px;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .card {
                margin-bottom: 1.5rem;
            }

            .navbar-brand {
                font-size: 1.3rem;
            }

            /* Mobile navbar adjustments */
            .navbar {
                padding: 0.5rem 0;
                min-height: 70px;
            }

            main {
                padding-top: 90px !important;
            }

            .hero-section {
                padding-top: 110px !important;
            }

            .page-header {
                padding-top: 120px;
                padding-bottom: 40px;
            }

            html {
                scroll-padding-top: 90px;
            }
        }

        @media (max-width: 576px) {
            main {
                padding-top: 80px !important;
            }

            .hero-section {
                padding-top: 100px !important;
            }

            .page-header {
                padding-top: 110px;
                padding-bottom: 30px;
            }

            html {
                scroll-padding-top: 80px;
            }
        }

        /* Loading Animation */
        .loading {
            position: relative;
            overflow: hidden;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        /* Carousel Enhancements */
        .carousel {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-xl);
        }

        .carousel-inner {
            border-radius: 20px;
        }

        .carousel-item {
            transition: transform 0.8s ease-in-out;
        }

        .carousel-image-placeholder {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
        }

        .carousel-image-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmerCarousel 3s infinite;
        }

        @keyframes shimmerCarousel {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 60px;
            height: 60px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .carousel-control-prev {
            left: 20px;
        }

        .carousel-control-next {
            right: 20px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: rgba(102, 126, 234, 0.8);
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 24px;
            height: 24px;
        }

        .carousel-indicators {
            bottom: 20px;
        }

        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 6px;
            background-color: rgba(255, 255, 255, 0.5);
            border: 2px solid white;
            transition: all 0.3s ease;
        }

        .carousel-indicators [data-bs-target].active {
            background-color: white;
            transform: scale(1.2);
        }

        .carousel-indicators [data-bs-target]:hover {
            background-color: rgba(255, 255, 255, 0.8);
            transform: scale(1.1);
        }

        /* Responsive Carousel */
        @media (max-width: 768px) {
            .carousel-image-placeholder {
                height: 300px !important;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 45px;
                height: 45px;
            }

            .carousel-control-prev {
                left: 10px;
            }

            .carousel-control-next {
                right: 10px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-leaf me-2"></i>Desa Ciakar
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                            <i class="fas fa-home me-1"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}" href="{{ url('/tentang') }}">
                            <i class="fas fa-info-circle me-1"></i>Tentang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pemerintahan') ? 'active' : '' }}" href="{{ url('/pemerintahan') }}">
                            <i class="fas fa-users me-1"></i>Pemerintahan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}" href="{{ url('/berita') }}">
                            <i class="fas fa-newspaper me-1"></i>Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="{{ url('/kontak') }}">
                            <i class="fas fa-phone me-1"></i>Kontak
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pengaduan') ? 'active' : '' }}" href="{{ route('pengaduan') }}">
                            <i class="fas fa-comment-alt me-1"></i>Pengaduan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="padding-top: 120px; position: relative; z-index: 1; margin-top: 0;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5><i class="fas fa-leaf me-2"></i>Desa Ciakar</h5>
                    <p class="mb-3">Desa yang kaya akan budaya, tradisi, dan potensi alam yang menawan di Kabupaten Ciamis, Jawa Barat.</p>
                    <div class="social-links">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><a href="{{ url('/tentang') }}">Tentang</a></li>
                        <li><a href="{{ url('/pemerintahan') }}">Pemerintahan</a></li>
                        <li><a href="{{ url('/berita') }}">Berita</a></li>
                        <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                        <li><a href="{{ route('pengaduan') }}">Pengaduan</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Layanan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Surat Keterangan</a></li>
                        <li><a href="#">Surat Domisili</a></li>
                        <li><a href="#">Surat Usaha</a></li>
                        <li><a href="#">Surat Kematian</a></li>
                        <li><a href="#">Surat Kelahiran</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Kontak Info</h5>
                    <div class="mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        <small>Jl. Raya Ciakar No. 389<br>Kec. Cipaku, Kab. Ciamis<br>Jawa Barat</small>
                    </div>
                    <div class="mb-2">
                        <i class="fas fa-phone me-2"></i>
                        <small>(0253) 123456</small>
                    </div>
                    <div class="mb-2">
                        <i class="fas fa-envelope me-2"></i>
                        <small>desaciakar389@gmail.com</small>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; {{ date('Y') }} Desa Ciakar. Semua hak dilindungi.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Dibuat dengan <i class="fas fa-heart text-danger"></i> untuk masyarakat</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Button -->
    <a href="{{ route('pengaduan') }}" class="floating-btn" title="Pengaduan">
        <i class="fas fa-comment-alt fa-lg"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        // Enhanced smooth scrolling with easing
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // Add scrolled class for styling
            if (scrollTop > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Hide/show navbar on scroll
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }

            lastScrollTop = scrollTop;
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.card, .feature-icon, .section-title, .section-subtitle');
            animateElements.forEach(el => {
                observer.observe(el);
            });
        });

        // Enhanced time update with animation
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleString('id-ID', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            const timeElement = document.getElementById('current-time');
            if (timeElement) {
                timeElement.style.opacity = '0';
                setTimeout(() => {
                    timeElement.textContent = timeString;
                    timeElement.style.opacity = '1';
                }, 150);
            }
        }

        // Parallax effect for hero sections
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.hero-section');

            parallaxElements.forEach(element => {
                const speed = 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Loading animation for cards
        function addLoadingEffect() {
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('loading');
                    setTimeout(() => {
                        card.classList.remove('loading');
                    }, 1000);
                }, index * 100);
            });
        }

        // Floating button pulse effect
        const floatingBtn = document.querySelector('.floating-btn');
        if (floatingBtn) {
            floatingBtn.addEventListener('mouseenter', function() {
                this.style.animation = 'none';
            });

            floatingBtn.addEventListener('mouseleave', function() {
                this.style.animation = 'pulse 2s infinite';
            });
        }

        // Enhanced hover effects for navigation
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.05)';
            });

            link.addEventListener('mouseleave', function() {
                if (!this.classList.contains('active')) {
                    this.style.transform = 'translateY(0) scale(1)';
                }
            });
        });

        // Typewriter effect for titles
        function typewriterEffect(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';

            function typeWriter() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }
            }

            typeWriter();
        }

        // Initialize typewriter for main titles
        document.addEventListener('DOMContentLoaded', function() {
            const mainTitle = document.querySelector('.hero-title');
            if (mainTitle) {
                const originalText = mainTitle.textContent;
                typewriterEffect(mainTitle, originalText, 80);
            }
        });

        // Update time every second for more dynamic feel
        updateTime();
        setInterval(updateTime, 1000);

        // Add ripple effect to buttons
        function createRipple(event) {
            const button = event.currentTarget;
            const circle = document.createElement('span');
            const diameter = Math.max(button.clientWidth, button.clientHeight);
            const radius = diameter / 2;

            circle.style.width = circle.style.height = `${diameter}px`;
            circle.style.left = `${event.clientX - button.offsetLeft - radius}px`;
            circle.style.top = `${event.clientY - button.offsetTop - radius}px`;
            circle.classList.add('ripple');

            const ripple = button.getElementsByClassName('ripple')[0];
            if (ripple) {
                ripple.remove();
            }

            button.appendChild(circle);
        }

        // Add ripple effect to all buttons
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', createRipple);
            });
        });

        // Add CSS for ripple effect
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            .btn {
                position: relative;
                overflow: hidden;
            }
            
            .ripple {
                position: absolute;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.6);
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
            }
            
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            .animate-in {
                animation: slideInUp 0.8s ease-out;
            }
            
            @keyframes slideInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(rippleStyle);
    </script>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>

</html>