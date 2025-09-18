<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title','PT. Digital')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* page base */
        body { background: #111; color: #fff; scroll-behavior: smooth; } /* ✅ smooth scroll */
        main { margin-top: 70px; } /* ruang untuk navbar fixed */

        /* navbar */
        .navbar-custom {
            background: rgba(0,0,0,0.35);
            backdrop-filter: blur(4px);
            padding: .4rem 0;
        }
        .navbar-brand { font-weight:700; color:#0d6efd !important; }
        .navbar-nav { gap: 1.2rem; }
        .nav-link {
            color: rgba(255,255,255,0.85) !important;
            font-size: .95rem;
            padding: .25rem .5rem;
        }
        .nav-link.active { color: #fff !important; font-weight:600; }
        .btn-contact {
            border-radius: 20px;
            padding: .45rem .9rem;
            font-weight:600;
        }

        /* section spacing biar ga ketutup navbar */
        section {
            padding: 80px 0;
            scroll-margin-top: 90px; /* ✅ biar offset pas scroll */
        }

        /* footer */
        footer {
            background:#151515;
            color:#bdbdbd;
            padding:2rem 0;
            margin-top:3rem;
        }
    </style>

    @stack('styles')
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="80" tabindex="0">
    @include('layouts.frontend.navbar')

    <!-- CONTENT -->
    <main>
        @yield('content')
    </main>

    @include('layouts.frontend.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
          link.addEventListener('click', function () {
            document.querySelector('.nav-link.active')?.classList.remove('active');
            this.classList.add('active');
          });
        });
      });
    </script>

    @stack('scripts')
</body>
</html>
