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
    @include('components.navbar')
    
    <main id="page-content">
      <section class="py-4 sm:py-6 md:py-8 px-2 sm:px-4">
        <div class="container mx-auto">
          <!-- Kotak 1: Daftar Santri Sakit -->
          <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg p-4 sm:p-6 mb-6 sm:mb-8">
            <!-- Header dengan Judul dan Filter -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 sm:mb-6 md:mb-8 gap-3 sm:gap-4">
              <h2 class="text-xl sm:text-2xl md:text-3xl font-bold primary-color">Santri Sakit</h2>
              <div class="flex flex-col sm:flex-row flex-wrap gap-3 w-full sm:w-auto">
                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                  <select class="glass-filter filter-select text-sm sm:text-base px-3 sm:px-4 py-2 sm:py-3 w-full sm:w-auto">
                    <option>Semua Kelas</option>
                    <option>Kelas 1</option>
                    <option>Kelas 2</option>
                    <option>Kelas 3</option>
                    <option>Kelas 4</option>
                    <option>Kelas 5</option>
                    <option>Kelas 6</option>
                  </select>
                  <select class="glass-filter filter-select text-sm sm:text-base px-3 sm:px-4 py-2 sm:py-3 w-full sm:w-auto">
                    <option>Semua Penyakit</option>
                    <option>Demam</option>
                    <option>Flu</option>
                    <option>Radang</option>
                    <option>Diare</option>
                  </select>
                </div>

                <!-- 🔍 Search Bar -->
                <div class="relative flex items-center w-full sm:w-48 md:w-64 lg:w-96 rounded-full shadow-md border border-white/50 focus-within:ring-2 focus-within:ring-[#395886] transition-all">
                  <i class="fa-solid fa-magnifying-glass text-[#395886] ml-3 sm:ml-4 text-sm sm:text-lg"></i>
                  <input type="text" placeholder="Cari Santri..." class="filter-input flex-1 bg-transparent border-none outline-none text-[#395886] placeholder-[#395886]/70 px-3 sm:px-4 py-2 sm:py-3 text-sm sm:text-base md:text-lg font-medium" />
                </div>
              </div>
            </div>

            <!-- Tabel -->
            <div class="overflow-x-auto">
              <div class="table-container">
                <table class="w-full min-w-full">
                  <thead>
                    <tr class="table-row">
                      <th class="table-header sticky top-0 z-10 py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">No.</th>
                      <th class="table-header sticky top-0 z-10 py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Nama</th>
                      <th class="table-header sticky top-0 z-10 py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Kelas</th>
                      <th class="table-header sticky top-0 z-10 py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Sakit Sejak</th>
                    </tr>
                  </thead>
                  <tbody class="table-body">
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">1</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Agam</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">3</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">24 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">2</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Udin</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">3</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">25 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">3</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Dung</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">2</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">28 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">4</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Krung</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">1</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">5</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Krang</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">1</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">6</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Krang</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">1</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">7</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Krang</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">1</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">30 November</td>

                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">5</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Krang</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">1</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">5</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Krang</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">1</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">5</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Krang</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">1</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">30 November</td>
                    </tr>
                    <tr class="table-row">
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">5</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">Krang</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">1</td>
                      <td class="table-cell py-3 sm:py-4 px-3 sm:px-6 text-sm sm:text-base">30 November</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Kotak 2: Statistik -->
          <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg p-4 sm:p-6">
            <h2 class="text-lg sm:text-xl md:text-2xl font-bold primary-color mb-4 sm:mb-6">Jumlah Santri Sakit</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 md:gap-8">
              <!-- Bagian Kiri: Daftar Penyakit -->
              <div>
                <div class="space-y-3 sm:space-y-4">
                  <div class="flex items-center justify-between p-2 sm:p-3 bg-blue-50 rounded-lg">
                    <span class="font-medium primary-color text-sm sm:text-base">Demam</span>
                    <span class="font-bold primary-color text-sm sm:text-base">15</span>
                  </div>
                  <div class="flex items-center justify-between p-2 sm:p-3 bg-blue-50 rounded-lg">
                    <span class="font-medium primary-color text-sm sm:text-base">Flu</span>
                    <span class="font-bold primary-color text-sm sm:text-base">8</span>
                  </div>
                  <div class="flex items-center justify-between p-2 sm:p-3 bg-blue-50 rounded-lg">
                    <span class="font-medium primary-color text-sm sm:text-base">Radang</span>
                    <span class="font-bold primary-color text-sm sm:text-base">5</span>
                  </div>
                  <div class="flex items-center justify-between p-2 sm:p-3 bg-blue-50 rounded-lg">
                    <span class="font-medium primary-color text-sm sm:text-base">Diare</span>
                    <span class="font-bold primary-color text-sm sm:text-base">12</span>
                  </div>
                </div>
              </div>

              <!-- Bagian Kanan: Grafik dan Filter -->
              <div>
                <!-- Grafik Sederhana -->
                <div class="mb-4 sm:mb-6">
                  <div class="flex items-end justify-between h-24 sm:h-32 mb-2">
                    <!-- Bar untuk Demam -->
                    <div class="flex flex-col items-center">
                      <div class="w-6 sm:w-8 bg-blue-500 rounded-t" style="height: 60px; height: 80px"></div>
                      <span class="text-xs mt-1 primary-color">Demam</span>
                    </div>
                    <!-- Bar untuk Flu -->
                    <div class="flex flex-col items-center">
                      <div class="w-6 sm:w-8 bg-green-500 rounded-t" style="height: 35px; height: 45px"></div>
                      <span class="text-xs mt-1 primary-color">Flu</span>
                    </div>
                    <!-- Bar untuk Radang -->
                    <div class="flex flex-col items-center">
                      <div class="w-6 sm:w-8 bg-yellow-500 rounded-t" style="height: 22px; height: 30px"></div>
                      <span class="text-xs mt-1 primary-color">Radang</span>
                    </div>
                    <!-- Bar untuk Diare -->
                    <div class="flex flex-col items-center">
                      <div class="w-6 sm:w-8 bg-red-500 rounded-t" style="height: 48px; height: 65px"></div>
                      <span class="text-xs mt-1 primary-color">Diare</span>
                    </div>
                  </div>

                  <!-- Skala -->
                  <div class="flex justify-between text-xs text-gray-500 px-1 sm:px-2">
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
                  <button class="time-filter active text-xs sm:text-sm px-3 sm:px-4 py-1.5 sm:py-2">Mingguan</button>
                  <button class="time-filter text-xs sm:text-sm px-3 sm:px-4 py-1.5 sm:py-2">Bulanan</button>
                  <button class="time-filter text-xs sm:text-sm px-3 sm:px-4 py-1.5 sm:py-2">Tahunan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>