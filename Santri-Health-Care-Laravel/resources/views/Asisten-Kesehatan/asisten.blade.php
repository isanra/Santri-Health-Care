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
  <body class="relative min-h-screen px-4 sm:px-[3.75rem] overflow-x-hidden">
    <!-- Header/Navbar -->
    @include('components.navbar')

    <main id="page-content">
      <!-- Heading Section -->
      <section class="z-20 relative pt-20 sm:pt-32 pb-8 sm:pb-16 px-2 sm:px-6">
        <div class="container mx-auto text-center relative z-10">
          <h1 class="text-4xl sm:text-4xl md:text-5xl font-bold primary-color">Pilih Salah Satu Keluhan Anda.</h1>
          <h2 class="text-sm sm:text-xl font-medium mb-4 sm:mb-6 primary-color">Kami bersedia memberikan solusi bagi gejala yang anda alami!</h2>
        </div>
      </section>
      
      <!-- Card Section -->
      <section class="z-20 relative py-8 sm:py-16 px-2 sm:px-6">
        <div class="container mx-auto relative z-10">
          <div class="grid grid-cols-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-6">
            <!-- Card 1: Sakit Kepala -->
            <div class="asisten-card">
              <div class="asisten-header">
                <img src="{{ asset('img/asisten-kesehatan/Gambar.jpg') }}" alt="Sakit Kepala" class="w-full h-full object-cover" />
              </div>
              <div class="asisten-content">
                <h3 class="text-base sm:text-lg md:text-2xl lg:text-3xl font-bold mb-2 sm:mb-4 text-center primary-color">Sakit Kepala</h3>
                <p class="text-xs sm:text-base text-gray-600 mb-3 sm:mb-6 text-center flex-grow">Akibat kelelahan, kurang istirahat, atau perubahan cuaca.</p>
                <a href="{{ route('asisten-kesehatan.detail') }}" class="asisten-button primary-color text-xs sm:text-base"> Lebih Lanjut... </a>
              </div>
            </div>

            <!-- Card 2: Diare -->
            <div class="asisten-card">
              <div class="asisten-header">
                <img src="{{ asset('img/asisten-kesehatan/Gambar.jpg') }}" alt="Diare" class="w-full h-full object-cover" />
              </div>
              <div class="asisten-content">
                <h3 class="text-base sm:text-lg md:text-2xl lg:text-3xl font-bold mb-2 sm:mb-4 text-center primary-color">Diare</h3>
                <p class="text-xs sm:text-base text-gray-600 mb-3 sm:mb-6 text-center flex-grow">Akibat kelelahan, kurang istirahat, atau perubahan cuaca.</p>
                <a href="{{ route('asisten-kesehatan.detail') }}" class="asisten-button primary-color text-xs sm:text-base"> Lebih Lanjut... </a>
              </div>
            </div>

            <!-- Card 3: Sakit Perut -->
            <div class="asisten-card">
              <div class="asisten-header">
                <img src="{{ asset('img/asisten-kesehatan/Gambar.jpg') }}" alt="Sakit Perut" class="w-full h-full object-cover" />
              </div>
              <div class="asisten-content">
                <h3 class="text-base sm:text-lg md:text-2xl lg:text-3xl font-bold mb-2 sm:mb-4 text-center primary-color">Sakit Perut</h3>
                <p class="text-xs sm:text-base text-gray-600 mb-3 sm:mb-6 text-center flex-grow">Akibat kelelahan, kurang istirahat, atau perubahan cuaca.</p>
                <a href="{{ route('asisten-kesehatan.detail') }}" class="asisten-button primary-color text-xs sm:text-base"> Lebih Lanjut... </a>
              </div>
            </div>

            <!-- Card 4: Badan Pegal -->
            <div class="asisten-card">
              <div class="asisten-header">
                <img src="{{ asset('img/asisten-kesehatan/Gambar.jpg') }}" alt="Badan Pegal" class="w-full h-full object-cover" />
              </div>
              <div class="asisten-content">
                <h3 class="text-base sm:text-lg md:text-2xl lg:text-3xl font-bold mb-2 sm:mb-4 text-center primary-color">Badan Pegal</h3>
                <p class="text-xs sm:text-base text-gray-600 mb-3 sm:mb-6 text-center flex-grow">Akibat kelelahan, kurang istirahat, atau perubahan cuaca.</p>
                <a href="{{ route('asisten-kesehatan.detail') }}" class="asisten-button primary-color text-xs sm:text-base"> Lebih Lanjut... </a>
              </div>
            </div>

            <!-- Card 5: Sakit Gigi -->
            <div class="asisten-card">
              <div class="asisten-header">
                <img src="{{ asset('img/asisten-kesehatan/Gambar.jpg') }}" alt="Sakit Gigi" class="w-full h-full object-cover" />
              </div>
              <div class="asisten-content">
                <h3 class="text-base sm:text-lg md:text-2xl lg:text-3xl font-bold mb-2 sm:mb-4 text-center primary-color">Sakit Gigi</h3>
                <p class="text-xs sm:text-base text-gray-600 mb-3 sm:mb-6 text-center flex-grow">Akibat kelelahan, kurang istirahat, atau perubahan cuaca.</p>
                <a href="{{ route('asisten-kesehatan.detail') }}" class="asisten-button primary-color text-xs sm:text-base"> Lebih Lanjut... </a>
              </div>
            </div>

            <!-- Card 6: Mual -->
            <div class="asisten-card">
              <div class="asisten-header">
                <img src="{{ asset('img/asisten-kesehatan/Gambar.jpg') }}" alt="Mual" class="w-full h-full object-cover" />
              </div>
              <div class="asisten-content">
                <h3 class="text-base sm:text-lg md:text-2xl lg:text-3xl font-bold mb-2 sm:mb-4 text-center primary-color">Mual</h3>
                <p class="text-xs sm:text-base text-gray-600 mb-3 sm:mb-6 text-center flex-grow">Akibat kelelahan, kurang istirahat, atau perubahan cuaca.</p>
                <a href="{{ route('asisten-kesehatan.detail') }}" class="asisten-button primary-color text-xs sm:text-base"> Lebih Lanjut... </a>
              </div>
            </div>

            <!-- Card 7: Masalah Kulit -->
            <div class="asisten-card">
              <div class="asisten-header">
                <img src="{{ asset('img/asisten-kesehatan/Gambar.jpg') }}" alt="Masalah Kulit" class="w-full h-full object-cover" />
              </div>
              <div class="asisten-content">
                <h3 class="text-base sm:text-lg md:text-2xl lg:text-3xl font-bold mb-2 sm:mb-4 text-center primary-color">Masalah Kulit</h3>
                <p class="text-xs sm:text-base text-gray-600 mb-3 sm:mb-6 text-center flex-grow">Akibat kelelahan, kurang istirahat, atau perubahan cuaca.</p>
                <a href="{{ route('asisten-kesehatan.detail') }}" class="asisten-button primary-color text-xs sm:text-base"> Lebih Lanjut... </a>
              </div>
            </div>

            <!-- Card 8: Lainnya -->
            <div class="asisten-card">
              <div class="asisten-header">
                <img src="{{ asset('img/asisten-kesehatan/Gambar.jpg') }}" alt="Lainnya" class="w-full h-full object-cover" />
              </div>
              <div class="asisten-content">
                <h3 class="text-base sm:text-lg md:text-2xl lg:text-3xl font-bold mb-2 sm:mb-4 text-center primary-color">Lainnya</h3>
                <p class="text-xs sm:text-base text-gray-600 mb-3 sm:mb-6 text-center flex-grow">Keluhan kesehatan lainnya yang tidak tercantum dalam list.</p>
                <a href="{{ route('asisten-kesehatan.detail') }}" class="asisten-button primary-color text-xs sm:text-base"> Lebih Lanjut... </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    
  </body>
</html>