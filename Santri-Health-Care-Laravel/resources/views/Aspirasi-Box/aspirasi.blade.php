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
      <section class="flex flex-col items-center justify-center text-center min-h-[80vh] px-6">
        <h2 class="text-2xl md:text-3xl primary-color mb-8">Ada Masalah Apa? <span class="font-bold primary-color">Ceritakan Disini.</span></h2>

        <div class="w-full max-w-2xl bg-white/70 backdrop-blur-xl rounded-full shadow-md flex items-center px-4 py-3 gap-3 transition focus-within:ring-2 focus-within:ring-[#2c3e75]">
          <button class="primary-color text-2xl">
            <i class="fa-solid fa-plus"></i>
          </button>
          <input type="text" placeholder="Tuliskan masalahmu..." class="flex-grow bg-transparent primary-color placeholder-[#8193b2] outline-none text-lg" />
          <button class="primary-color text-xl">
            <i class="fa-solid fa-microphone-lines"></i>
          </button>
        </div>
      </section>
    </main>
  </body>
</html>