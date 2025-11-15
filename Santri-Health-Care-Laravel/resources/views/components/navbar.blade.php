<!-- Header/Navbar -->
<header class="sticky top-4 left-4 right-4 primary-bg text-white rounded-4xl shadow-lg py-4 px-6 z-30">
  <div class="container mx-auto flex justify-between items-center">
    <div class="flex items-center">
      <h1 class="text-2xl font-bold text-white">Santri Health Care</h1>
    </div>
    <nav class="hidden md:flex space-x-3 relative">
      <span id="navHighlight" class="absolute top-0 left-0 h-full bg-white/10 rounded-[15px] shadow-inner pointer-events-none transition-all duration-300"></span>

      <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
      <a href="{{ route('asisten-kesehatan') }}" class="nav-link {{ request()->is('asisten-kesehatan*') ? 'active' : '' }}">Asisten Kesehatan</a>
      <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
      <a href="{{ route('aspirasi-box') }}" class="nav-link {{ request()->routeIs('aspirasi-box') ? 'active' : '' }}">Aspirasi Box</a>
      <a href="{{ route('manajemen-obat') }}" class="nav-link {{ request()->routeIs('manajemen-obat') ? 'active' : '' }}">Manajemen Obat</a>
    </nav>

    <div class="md:hidden">
      <button id="mobileMenuButton" class="text-white focus:outline-none">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Menu (Hidden by default) -->
<div id="mobileMenu" class="fixed inset-0 bg-white z-50 hidden">
  <div class="p-6">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-2xl font-bold primary-color">Santri Health Care</h2>
      <button id="closeMenu" class="text-gray-700">
        <i class="fas fa-times text-2xl"></i>
      </button>
    </div>
    <nav class="flex flex-col space-y-6">
      <a href="{{ route('home') }}" class="text-xl font-medium text-gray-700 hover:primary-color {{ request()->routeIs('home') ? 'primary-color font-bold' : '' }}">Beranda</a>
      <a href="{{ route('asisten-kesehatan') }}" class="text-xl font-medium text-gray-700 hover:primary-color {{ request()->is('asisten-kesehatan*') ? 'primary-color font-bold' : '' }}">Asisten Kesehatan</a>
      <a href="{{ route('dashboard') }}" class="text-xl font-medium text-gray-700 hover:primary-color {{ request()->routeIs('dashboard') ? 'primary-color font-bold' : '' }}">Dashboard</a>
      <a href="{{ route('aspirasi-box') }}" class="text-xl font-medium text-gray-700 hover:primary-color {{ request()->routeIs('aspirasi-box') ? 'primary-color font-bold' : '' }}">Aspirasi Box</a>
    </nav>
  </div>
</div>