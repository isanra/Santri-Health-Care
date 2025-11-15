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
      <section class="py-8 px-4">
        <div class="container mx-auto">
          <!-- Kotak 1: Daftar Santri Sakit -->
          <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
            <!-- Header dengan Judul dan Filter -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
              <h2 class="text-3xl font-bold primary-color">Santri Sakit</h2>
              <div class="flex flex-wrap gap-3">
                <select class="glass-filter filter-select">
                  <option>Semua Kelas</option>
                  <option>Kelas 1</option>
                  <option>Kelas 2</option>
                  <option>Kelas 3</option>
                  <option>Kelas 4</option>
                  <option>Kelas 5</option>
                  <option>Kelas 6</option>
                </select>
                <select class="glass-filter filter-select">
                  <option>Semua Penyakit</option>
                  <option>Demam</option>
                  <option>Flu</option>
                  <option>Radang</option>
                  <option>Diare</option>
                </select>

                <!-- 🔍 Search Bar -->
                <div class="relative flex items-center w-full sm:w-96 rounded-full shadow-md border border-white/50 focus-within:ring-2 focus-within:ring-[#395886] transition-all">
                  <i class="fa-solid fa-magnifying-glass text-[#395886] ml-4 text-lg"></i>
                  <input type="text" placeholder="Cari Santri..." class="filter-input flex-1 bg-transparent border-none outline-none text-[#395886] placeholder-[#395886]/70 px-4 py-3 text-base sm:text-lg font-medium" />
                </div>
              </div>
            </div>

            <!-- Tabel -->
            <div class="overflow-x-auto">
              <div class="table-container">
                <table class="w-full min-w-full">
                  <thead>
                    <tr class="table-row">
                      <th class="table-header sticky top-0 z-10">No.</th>
                      <th class="table-header sticky top-0 z-10">Nama</th>
                      <th class="table-header sticky top-0 z-10">Kelas</th>
                      <th class="table-header sticky top-0 z-10">Sakit Sejak</th>
                    </tr>
                  </thead>
                  <tbody class="table-body">
                    <tr class="table-row">
                      <td class="table-cell">1</td>
                      <td class="table-cell">Agam</td>
                      <td class="table-cell">3</td>
                      <td class="table-cell">24 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell">2</td>
                      <td class="table-cell">Udin</td>
                      <td class="table-cell">3</td>
                      <td class="table-cell">25 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell">3</td>
                      <td class="table-cell">Dung</td>
                      <td class="table-cell">2</td>
                      <td class="table-cell">28 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell">4</td>
                      <td class="table-cell">Krung</td>
                      <td class="table-cell">1</td>
                      <td class="table-cell">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell">5</td>
                      <td class="table-cell">Krang</td>
                      <td class="table-cell">1</td>
                      <td class="table-cell">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell">6</td>
                      <td class="table-cell">Krang</td>
                      <td class="table-cell">1</td>
                      <td class="table-cell">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell">6</td>
                      <td class="table-cell">Krang</td>
                      <td class="table-cell">1</td>
                      <td class="table-cell">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell">6</td>
                      <td class="table-cell">Krang</td>
                      <td class="table-cell">1</td>
                      <td class="table-cell">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell">6</td>
                      <td class="table-cell">Krang</td>
                      <td class="table-cell">1</td>
                      <td class="table-cell">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell">6</td>
                      <td class="table-cell">Krang</td>
                      <td class="table-cell">1</td>
                      <td class="table-cell">30 November</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Kotak 2: Statistik -->
          <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-2xl font-bold primary-color mb-6">Jumlah Santri Sakit</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
              <!-- Bagian Kiri: Daftar Penyakit -->
              <div>
                <div class="space-y-4">
                  <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                    <span class="font-medium primary-color">Demam</span>
                    <span class="font-bold primary-color">15</span>
                  </div>
                  <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                    <span class="font-medium primary-color">Flu</span>
                    <span class="font-bold primary-color">8</span>
                  </div>
                  <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                    <span class="font-medium primary-color">Radang</span>
                    <span class="font-bold primary-color">5</span>
                  </div>
                  <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                    <span class="font-medium primary-color">Diare</span>
                    <span class="font-bold primary-color">12</span>
                  </div>
                </div>
              </div>

              <!-- Bagian Kanan: Grafik dan Filter -->
              <div>
                <!-- Grafik Sederhana -->
                <div class="mb-6">
                  <div class="flex items-end justify-between h-32 mb-2">
                    <!-- Bar untuk Demam -->
                    <div class="flex flex-col items-center">
                      <div class="w-8 bg-blue-500 rounded-t" style="height: 80px"></div>
                      <span class="text-xs mt-1 primary-color">Demam</span>
                    </div>
                    <!-- Bar untuk Flu -->
                    <div class="flex flex-col items-center">
                      <div class="w-8 bg-green-500 rounded-t" style="height: 45px"></div>
                      <span class="text-xs mt-1 primary-color">Flu</span>
                    </div>
                    <!-- Bar untuk Radang -->
                    <div class="flex flex-col items-center">
                      <div class="w-8 bg-yellow-500 rounded-t" style="height: 30px"></div>
                      <span class="text-xs mt-1 primary-color">Radang</span>
                    </div>
                    <!-- Bar untuk Diare -->
                    <div class="flex flex-col items-center">
                      <div class="w-8 bg-red-500 rounded-t" style="height: 65px"></div>
                      <span class="text-xs mt-1 primary-color">Diare</span>
                    </div>
                  </div>

                  <!-- Skala -->
                  <div class="flex justify-between text-xs text-gray-500 px-2">
                    <span>0</span>
                    <span>5</span>
                    <span>10</span>
                    <span>15</span>
                    <span>20</span>
                    <span>25</span>
                  </div>
                </div>

                <!-- Filter Waktu -->
                <div class="flex gap-2">
                  <button class="time-filter active">Mingguan</button>
                  <button class="time-filter">Bulanan</button>
                  <button class="time-filter">Tahunan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>