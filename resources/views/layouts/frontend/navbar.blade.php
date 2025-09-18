<nav class="navbar navbar-expand-lg navbar-black bg-black shadow-sm">
  <div class="container-fluid">
    <!-- Logo / Brand -->
    <a class="navbar-brand fw-bold mx-auto" href="/">PT.DIGITAL</a>

    <!-- Toggler untuk mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu navigasi -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('home')) active @endif" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('aboutus')) active @endif" href="#aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('services')) active @endif" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('sejarah')) active @endif" href="/sejarah">Sejarah</a>
        </li>
        <!-- Contact Us jadi tombol merah -->
        <li class="nav-item ms-3">
          <a class="btn btn-danger px-3 py-2 @if(request()->routeIs('contact')) active @endif" href="/contactus">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
