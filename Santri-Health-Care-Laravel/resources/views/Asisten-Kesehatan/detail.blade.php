<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Santri Health Care</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>

  <body class="relative min-h-screen px-4 sm:px-6 lg:px-[3.75rem] overflow-x-hidden">
    @include('components.navbar')

    <main id="page-content">

      <section class="
        px-4 sm:px-6 md:px-6 lg:px-10 
        py-8 sm:py-12 md:py-16 lg:py-16
        flex flex-col items-center text-center text-[#395886]
        space-y-8 sm:space-y-12 md:space-y-16 lg:space-y-20
      ">

        <!-- Pertanyaan 1 -->
        <div>
          <h2 class="
            text-xl sm:text-2xl md:text-3xl 
            lg:text-4xl xl:text-5xl 
            font-semibold mb-3 sm:mb-4 lg:mb-4 leading-tight
          ">
            Demam.
          </h2>

          <p class="
            text-gray-700 
            text-sm sm:text-base md:text-lg 
            lg:text-lg mb-4 sm:mb-6 lg:mb-8
          ">
            Sudah berapa lama anda mengalami demam?
          </p>

          <div class="
            grid grid-cols-2 sm:flex sm:flex-wrap 
            justify-center 
            gap-2 sm:gap-3 md:gap-4 lg:gap-6
          ">
            <button class="option-btn text-xs sm:text-sm md:text-base lg:text-lg px-4 lg:px-6 py-2 lg:py-4">Baru Saja</button>
            <button class="option-btn text-xs sm:text-sm md:text-base lg:text-lg px-4 lg:px-6 py-2 lg:py-4">Sudah 1 Hari</button>
            <button class="option-btn text-xs sm:text-sm md:text-base lg:text-lg px-4 lg:px-6 py-2 lg:py-4">3 Hari Lebih</button>
            <button class="option-btn text-xs sm:text-sm md:text-base lg:text-lg px-4 lg:px-6 py-2 lg:py-4">1 Pekan</button>
          </div>
        </div>

        <!-- Pertanyaan 2 -->
        <div>
          <h2 class="
            text-lg sm:text-xl md:text-2xl 
            lg:text-3xl xl:text-4xl 
            font-semibold mb-3 sm:mb-4 lg:mb-4 leading-tight
          ">
            Berapa Suhu Tubuh Anda Sekarang?
          </h2>

          <p class="
            text-gray-700 
            text-sm sm:text-base md:text-lg 
            lg:text-lg mb-4 sm:mb-6 lg:mb-8
          ">
            Data suhu tubuh Anda membantu kami memberi saran yang pas.
          </p>

          <div class="
            grid grid-cols-2 sm:flex sm:flex-wrap 
            justify-center 
            gap-2 sm:gap-3 md:gap-4 lg:gap-6
          ">
            <button class="option-btn text-xs sm:text-sm md:text-base lg:text-lg px-4 lg:px-6 py-2 lg:py-4">37,5°C – 38°C</button>
            <button class="option-btn text-xs sm:text-sm md:text-base lg:text-lg px-4 lg:px-6 py-2 lg:py-4">38°C – 39°C</button>
            <button class="option-btn text-xs sm:text-sm md:text-base lg:text-lg px-4 lg:px-6 py-2 lg:py-4">Di atas 39°C</button>
            <button class="option-btn text-xs sm:text-sm md:text-base lg:text-lg px-4 lg:px-6 py-2 lg:py-4">Opsi Lain…</button>
          </div>
        </div>

        <!-- Evaluasi -->
        <div class="w-full px-2 sm:px-4 lg:px-4">
          <h3 class="
            text-lg sm:text-xl md:text-2xl 
            lg:text-3xl 
            font-semibold mb-4 sm:mb-5 lg:mb-6
          ">
            Hasil Evaluasi Kesehatan
          </h3>

          <p class="
            text-gray-700 
            text-sm sm:text-base md:text-lg 
            lg:text-lg mb-4 sm:mb-6 lg:mb-8
          ">
            Hasil berdasarkan data yang kami peroleh dari diri anda.
          </p>

          <div class="
            grid grid-cols-1 
            sm:grid-cols-1 md:grid-cols-1 
            lg:grid-cols-3
            gap-4 sm:gap-6 lg:gap-8
          ">
            <div class="eval-card bg-[#DFFFD8]/70 border border-green-400 p-4 sm:p-5 lg:p-6">
              <div class="w-3 h-3 sm:w-4 sm:h-4 bg-green-500 rounded-full mx-auto mb-2 sm:mb-3"></div>
              <p class="text-xs sm:text-sm md:text-base lg:text-base">Kondisi ringan, bisa dirawat di UKS.</p>
            </div>

            <div class="eval-card bg-[#FFF5D8]/70 border border-yellow-400 p-4 sm:p-5 lg:p-6">
              <div class="w-3 h-3 sm:w-4 sm:h-4 bg-yellow-500 rounded-full mx-auto mb-2 sm:mb-3"></div>
              <p class="text-xs sm:text-sm md:text-base lg:text-base">Perlu pengawasan lebih lanjut dan wajib lapor ke Pembina.</p>
            </div>

            <div class="eval-card bg-[#FFD8D8]/70 border border-red-400 p-4 sm:p-5 lg:p-6">
              <div class="w-3 h-3 sm:w-4 sm:h-4 bg-red-500 rounded-full mx-auto mb-2 sm:mb-3"></div>
              <p class="text-xs sm:text-sm md:text-base lg:text-base">Kondisi harus menghubungi bantuan profesional.</p>
            </div>
          </div>
        </div>

        <!-- Saran -->
        <div class="
          text-left 
          bg-white/40 backdrop-blur-md 
          p-4 sm:p-6 lg:p-8 
          rounded-xl sm:rounded-2xl 
          border border-white/30 shadow-inner 
          w-full max-w-4xl lg:max-w-5xl
        ">
          <h4 class="
            text-base sm:text-lg md:text-xl 
            lg:text-2xl 
            font-semibold mb-3 sm:mb-4 lg:mb-4
          ">
            Saran Tindakan Pertama :
          </h4>

          <p class="
            text-gray-700 
            text-xs sm:text-sm md:text-base lg:text-lg 
            leading-relaxed
          ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

      </section>

    </main>
  </body>
</html>
