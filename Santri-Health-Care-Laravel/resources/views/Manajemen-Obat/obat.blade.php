<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Santri Health Care</title>
    
    <!-- Ganti dengan Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <body class="relative min-h-screen px-[3.75rem] overflow-x-hidden">
    <!-- Lingkaran dekoratif
    <div class="absolute top-[-100px] right-[-100px] w-[350px] h-[350px] rounded-full primary-bg blur-[100px] opacity-100 -z-10"></div>
    <div class="absolute bottom-[-100px] left-[-100px] w-[350px] h-[350px] rounded-full primary-bg blur-[100px] opacity-100 -z-10"></div> -->

    @include('components.navbar')
    
    <main id="page-content">
      <!-- Heading Section -->
      <section class="z-20 relative pt-32 pb-10 px-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4 w-full">
          <h2 class="text-5xl font-bold primary-color mb-4 md:mb-0">Stok Ketersediaan Obat</h2>

          <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 w-full md:w-auto">
            <!-- 🔍 Search Bar -->
            <div class="relative flex items-center w-full sm:w-96 bg-white rounded-full shadow-md border border-white/50 focus-within:ring-2 focus-within:ring-[#395886] transition-all">
              <i class="fa-solid fa-magnifying-glass text-[#395886] ml-4 text-lg"></i>
              <input type="text" placeholder="Cari nama obat..." class="flex-1 bg-transparent border-none outline-none text-[#395886] placeholder-[#395886]/70 px-4 py-3 text-base sm:text-lg font-medium" />
            </div>

            <!-- ⚙️ Filter Dropdown -->
            <div class="relative">
              <button id="filterToggle" class="flex items-center gap-2 px-5 py-3 bg-white rounded-full text-[#395886] font-semibold text-base sm:text-lg shadow-md border border-white/50 hover:bg-[#f8faff] active:scale-95 transition-all">
                <i class="fa-solid fa-filter"></i>
                Filter
              </button>

              <!-- Dropdown muncul pas tombol diklik -->
              <div id="filterDropdown" class="hidden absolute right-0 mt-3 w-44 bg-white/90 backdrop-blur-md border border-white/40 rounded-2xl shadow-lg z-10 animate-fadeIn">
                <ul class="flex flex-col divide-y divide-white/30">
                  <li>
                    <button class="w-full text-left px-4 py-3 hover:bg-[#e7efff] text-[#395886] font-medium transition">Demam</button>
                  </li>
                  <li>
                    <button class="w-full text-left px-4 py-3 hover:bg-[#e7efff] text-[#395886] font-medium transition">Flu</button>
                  </li>
                  <li>
                    <button class="w-full text-left px-4 py-3 hover:bg-[#e7efff] text-[#395886] font-medium transition">Radang</button>
                  </li>
                  <li>
                    <button class="w-full text-left px-4 py-3 hover:bg-[#e7efff] text-[#395886] font-medium transition">Diare</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Card Section -->
      <section class="relative py-16 px-6">
        <div class="container mx-auto relative z-10">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card Obat -->
            <div class="obat-card">
              <div class="obat-header">
                <img src="{{ asset('img/Manajemen-Obat/obat.jpg') }}" alt="Paracetamol" class="w-full h-full object-contain" />
              </div>
              <div class="obat-content">
                <h3 class="text-3xl font-bold mb-1">
                  <span class="inline-flex items-center justify-center w-4 h-4 bg-green-500 rounded-full mr-2 border-1"></span>
                  Paracetamol
                </h3>
                <p class="text-gray-600 text-md">Paracetamol 500mg,<br />Paracetamol 500mg.</p>
                <p class="text-gray-500 text-md mt-3">Stok tersedia : 10 Strip</p>
              </div>
            </div>

            <!-- Copy ulang card ini sesuai kebutuhan -->
            <div class="obat-card">
              <div class="obat-header">
                <img src="{{ asset('img/Manajemen-Obat/obat.jpg') }}" alt="Paracetamol" class="w-full h-full object-contain" />
              </div>
              <div class="obat-content">
                <h3 class="text-3xl font-bold mb-1">
                  <span class="inline-flex items-center justify-center w-4 h-4 bg-blue-500 rounded-full mr-2 border-1"></span>
                  Paracetamol
                </h3>
                <p class="text-gray-600 text-md">Paracetamol 500mg,<br />Paracetamol 500mg.</p>
                <p class="text-gray-500 text-md mt-3">Stok tersedia : 10 Strip</p>
              </div>
            </div>

            <div class="obat-card">
              <div class="obat-header">
                <img src="{{ asset('img/Manajemen-Obat/obat.jpg') }}" alt="Paracetamol" class="w-full h-full object-contain" />
              </div>
              <div class="obat-content">
                <h3 class="text-3xl font-bold mb-1">
                  <span class="inline-flex items-center justify-center w-4 h-4 bg-red-500 rounded-full mr-2 border-1"></span>
                  Paracetamol
                </h3>
                <p class="text-gray-600 text-md">Paracetamol 500mg,<br />Paracetamol 500mg.</p>
                <p class="text-gray-500 text-md mt-3">Stok tersedia : 10 Strip</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>