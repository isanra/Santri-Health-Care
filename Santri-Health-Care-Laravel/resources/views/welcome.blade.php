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
  <!-- ... rest of the body ... -->
  <body class="relative min-h-screen px-15 overflow-x-hidden">
    <!-- Header/Navbar -->
    @include('components.navbar')
    <main id="page-content">
      <!-- Hero Section -->
      <section class="z-20 relative pt-32 pb-16 px-6">
        <div class="container mx-auto text-center relative z-10">
          <!-- Plus decorations -->
          <img src="{{ asset('img/Plus.png') }}" class="plus-decoration top-40 right-20" alt="Plus Decoration" />
          <img src="{{ asset('img/Plus.png') }}" class="plus-decoration bottom-40 left-20" alt="Plus Decoration" />

          <h1 class="text-5xl md:text-8xl font-bold mb-6 primary-color">
            Welcome to <br />
            Santri Health Care
          </h1>
          <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 primary-color">
            Dari gejala hingga tindakan pertama, semua bisa lebih cepat, tepat, dan aman bersama Smart Santri Health. Kami memiliki 3 fitur utama dalam website ini, silahkan pilih sesuai kebutuhan anda.
          </p>
        </div>
      </section>

      <!-- Features Section -->
      <section class="py-16 px-6">
        <div class="container mx-auto">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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
                  <a href="/asisten-kesehatan" class="feature-button inline-block primary-color px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors duration-300 text-center text-lg w-full"> Pergi ke Asisten Kesehatan </a>
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
                    Menampilkan <strong>data kesehatan santri</strong>, meliputi jumlah santri sakit, <strong>riwayat penyakit</strong>, dan <strong>persentase kasus</strong> harian, mingguan, hingga bulanan, sehingga memudahkan pemantauan
                    dan pencegahan penyakit.
                  </p>
                </div>
                <div class="text-center">
                  <a href="/dashboard" class="feature-button inline-block primary-color px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors duration-300 text-center text-lg w-full"> Pergi ke Dashboard </a>
                </div>
              </div>
            </div>
            <!-- Feature 3: Aspiraal Box -->
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
                  <a href="/aspirasi-box" class="feature-button inline-block primary-color px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors duration-300 text-center text-lg w-full"> Pergi ke Aspiarsi Box </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    

    
  </body>
</html>