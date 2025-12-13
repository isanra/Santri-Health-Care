<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Santri Health Care</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <body class="relative min-h-screen px-4 sm:px-6 md:px-[3.75rem] overflow-x-hidden">
    @include('components.navbar')
    
    <main id="page-content">
      <!-- Hero Section -->
      <section class="z-20 relative pt-12 sm:pt-24 md:pt-32 pb-6 sm:pb-8 md:pb-16 px-4">
        <div class="container mx-auto text-center relative z-10">
          <!-- Plus decorations - Hide on mobile -->
          <img src="{{ asset('img/Plus.png') }}" class="plus-decoration top-12 sm:top-16 md:top-40 right-4 sm:right-8 md:right-20 hidden md:block" alt="Plus Decoration" />
          <img src="{{ asset('img/Plus.png') }}" class="plus-decoration bottom-12 sm:bottom-16 md:bottom-40 left-4 sm:left-8 md:left-20 hidden md:block" alt="Plus Decoration" />

          <h1 class="text-4xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-8xl font-bold mb-2 sm:mb-3 md:mb-6 primary-color">
            Welcome to <br class="hidden sm:block" />
            Santri Health Care
          </h1>
          <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl max-w-2xl md:max-w-3xl mx-auto mb-4 sm:mb-6 md:mb-8 primary-color">
            Dari gejala hingga tindakan pertama, semua bisa lebih cepat, tepat, dan aman bersama Smart Santri Health. Kami memiliki 3 fitur utama dalam website ini, silahkan pilih sesuai kebutuhan anda.
          </p>
        </div>
      </section>

      <!-- Features Section -->
      <section class="py-6 sm:py-8 md:py-16 px-4">
        <div class="container mx-auto">
          <!-- Mobile: Vertical stacked cards without button -->
          <div class="md:hidden space-y-3">
            <!-- Feature 1: Asisten Kesehatan -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 mobile-feature-card">
              <div class="flex h-full">
                <!-- Header di kanan (hanya gambar) -->
                <div class="mobile-feature-header w-1/4 flex items-center justify-center p-3">
                  <img src="{{ asset('img/menu1.png') }}" alt="Asisten Kesehatan" class="w-10 h-10 sm:w-12 sm:h-12" />
                </div>
                
                <!-- Konten di kiri dengan judul -->
                <div class="mobile-feature-content w-3/4 p-3 sm:p-4">
                  <!-- Judul di sini (di konten) -->
                  <h3 class="text-base sm:text-lg font-bold primary-color mb-1">
                    Asisten Kesehatan
                  </h3>
                  <p class="primary-color text-xs sm:text-sm leading-relaxed">
                    Membantu untuk <strong>mendiagnosis</strong> keluhan santri, memberi <strong>rekomendasi obat</strong>, dan menentukan <strong>tingkat kondisi</strong> secara cepat dan akurat.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature 2: Dashboard -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 mobile-feature-card">
              <div class="flex h-full">
                <!-- Header di kanan (hanya gambar) -->
                <div class="mobile-feature-header w-1/4 flex items-center justify-center p-3">
                  <img src="{{ asset('img/menu2.png') }}" alt="Dashboard" class="w-10 h-10 sm:w-12 sm:h-12" />
                </div>
                
                <!-- Konten di kiri dengan judul -->
                <div class="mobile-feature-content w-3/4 p-3 sm:p-4">
                  <!-- Judul di sini (di konten) -->
                  <h3 class="text-base sm:text-lg font-bold primary-color mb-1">
                    Dashboard
                  </h3>
                  <p class="primary-color text-xs sm:text-sm leading-relaxed">
                    Menampilkan <strong>data kesehatan santri</strong>, meliputi jumlah santri sakit, <strong>riwayat penyakit</strong>, dan <strong>persentase kasus</strong> harian, mingguan, hingga bulanan.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature 3: Aspirasi Box -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 mobile-feature-card">
              <div class="flex h-full">
                <!-- Header di kanan (hanya gambar) -->
                <div class="mobile-feature-header w-1/4 flex items-center justify-center p-3">
                  <img src="{{ asset('img/menu3.png') }}" alt="Aspirasi box" class="w-10 h-10 sm:w-12 sm:h-12" />
                </div>
                
                <!-- Konten di kiri dengan judul -->
                <div class="mobile-feature-content w-3/4 p-3 sm:p-4">
                  <!-- Judul di sini (di konten) -->
                  <h3 class="text-base sm:text-lg font-bold primary-color mb-1">
                    Aspirasi Box
                  </h3>
                  <p class="primary-color text-xs sm:text-sm leading-relaxed">
                    Fitur Aspirasi Box Digital menyediakan ruang aman dan rahasia <strong> bagi santri untuk curhat </strong>, yang langsung ditindaklanjuti oleh ustadz konseling.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Desktop: Grid layout (unchanged) -->
          <div class="hidden md:grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            <!-- Feature 1: Asisten Kesehatan -->
            <div class="bg-white rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300 feature-card">
              <div class="primary-color feature-header">
                <div class="mb-4">
                  <img src="{{ asset('img/menu1.png') }}" alt="Asisten Kesehatan" class="w-20 h-20 mx-auto" />
                </div>
                <h3 class="text-3xl font-bold text-center">Asisten Kesehatan</h3>
              </div>
              <div class="feature-content">
                <div class="flex-1 flex flex-col justify-center">
                  <p class="primary-color mb-6 text-xl leading-relaxed text-center">
                    Membantu untuk <strong>mendiagnosis</strong> keluhan santri, memberi <strong>rekomendasi obat</strong>, dan menentukan <strong>tingkat kondisi</strong> secara cepat dan akurat.
                  </p>
                </div>
                <div class="text-center">
                  <a href="{{ route('asisten-kesehatan') }}" class="feature-button inline-block primary-color px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors duration-300 text-center text-lg w-full"> Pergi ke Asisten Kesehatan </a>
                </div>
              </div>
            </div>
            
            <!-- Feature 2: Dashboard -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 feature-card">
              <div class="primary-color feature-header">
                <div class="mb-4">
                  <img src="{{ asset('img/menu2.png') }}" alt="Dashboard" class="w-20 h-20 mx-auto" />
                </div>
                <h3 class="text-3xl font-bold text-center">Dashboard</h3>
              </div>
              <div class="feature-content">
                <div class="flex-1 flex flex-col justify-center">
                  <p class="primary-color mb-6 text-xl leading-relaxed text-center">
                    Menampilkan <strong>data kesehatan santri</strong>, meliputi jumlah santri sakit, <strong>riwayat penyakit</strong>, dan <strong>persentase kasus</strong> harian, mingguan, hingga bulanan, sehingga memudahkan pemantauan dan pencegahan penyakit.
                  </p>
                </div>
                <div class="text-center">
                  <a href="{{ route('dashboard') }}" class="feature-button inline-block primary-color px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors duration-300 text-center text-lg w-full"> Pergi ke Dashboard </a>
                </div>
              </div>
            </div>
            
            <!-- Feature 3: Aspirasi Box -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 feature-card">
              <div class="primary-color feature-header">
                <div class="mb-4">
                  <img src="{{ asset('img/menu3.png') }}" alt="Aspirasi box" class="w-20 h-20 mx-auto" />
                </div>
                <h3 class="text-3xl font-bold text-center">Aspirasi Box</h3>
              </div>
              <div class="feature-content">
                <div class="flex-1 flex flex-col justify-center">
                  <p class="primary-color mb-6 text-xl leading-relaxed text-center">
                    Fitur Aspirasi Box Digital menyediakan ruang aman dan rahasia <strong> bagi santri untuk curhat </strong>, yang langsung ditindaklanjuti oleh ustadz konseling.
                  </p>
                </div>
                <div class="text-center">
                  <a href="{{ route('aspirasi-box') }}" class="feature-button inline-block primary-color px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors duration-300 text-center text-lg w-full"> Pergi ke Aspirasi Box </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer Section -->
      <footer class="py-3 sm:py-4 md:py-6 px-4 text-center primary-color border-t border-[#395886]/20 mt-6">
        <p class="text-xs sm:text-sm md:text-base">Copyright Santri Health Care ©2023</p>
      </footer>
    </main>
  </body>
</html>