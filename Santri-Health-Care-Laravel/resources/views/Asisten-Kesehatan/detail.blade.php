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

    <!-- Header/Navbar -->
    @include('components.navbar')
    
    <main id="page-content">
        <section class="px-6 md:px-10 py-16 flex flex-col items-center text-center text-[#395886] space-y-20">
            <!-- Pertanyaan 1 -->
            <div>
              <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold mb-4 leading-tight">Demam.</h2>
              <p class="text-gray-700 text-base sm:text-lg mb-8">Sudah berapa lama anda mengalami demam?</p>
          
              <div class="flex flex-wrap justify-center gap-4 sm:gap-6">
                <button class="option-btn">Baru Saja</button>
                <button class="option-btn">Sudah 1 Hari</button>
                <button class="option-btn">3 Hari Lebih</button>
                <button class="option-btn">1 Pekan</button>
              </div>
            </div>
          
            <!-- Pertanyaan 2 -->
            <div>
              <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-4 leading-tight">Berapa Suhu Tubuh Anda Sekarang?</h2>
              <p class="text-gray-700 text-base sm:text-lg mb-8">Data suhu tubuh Anda membantu kami memberi saran yang pas.</p>
          
              <div class="flex flex-wrap justify-center gap-4 sm:gap-6">
                <button class="option-btn">37,5°C – 38°C</button>
                <button class="option-btn">38°C – 39°C</button>
                <button class="option-btn">Di atas 39°C</button>
                <button class="option-btn">Opsi Lain…</button>
              </div>
            </div>
          
            <!-- Evaluasi -->
            <div class="w-full px-4">
              <h3 class="text-2xl sm:text-3xl font-semibold mb-6">Hasil Evaluasi Kesehatan</h3>
              <p class="text-gray-700 text-base sm:text-lg mb-8">Hasil berdasarkan data yang kami peroleh dari diri anda.</p>
          
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="eval-card bg-[#DFFFD8]/70 border border-green-400">
                  <div class="w-4 h-4 bg-green-500 rounded-full mx-auto mb-3"></div>
                  <p>Kondisi ringan, bisa dirawat di UKS.</p>
                </div>
          
                <div class="eval-card bg-[#FFF5D8]/70 border border-yellow-400">
                  <div class="w-4 h-4 bg-yellow-500 rounded-full mx-auto mb-3"></div>
                  <p>Perlu pengawasan lebih lanjut dan wajib lapor ke Pembina.</p>
                </div>
          
                <div class="eval-card bg-[#FFD8D8]/70 border border-red-400">
                  <div class="w-4 h-4 bg-red-500 rounded-full mx-auto mb-3"></div>
                  <p>Kondisi harus menghubungi bantuan profesional.</p>
                </div>
              </div>
            </div>
          
            <!-- Saran -->
            <div class="text-left bg-white/40 backdrop-blur-md p-6 sm:p-8 rounded-2xl border border-white/30 shadow-inner w-full max-w-5xl">
              <h4 class="text-xl sm:text-2xl font-semibold mb-4">Saran Tindakan Pertama :</h4>
              <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </section>
          
    </main>

    
  </body>
</html>