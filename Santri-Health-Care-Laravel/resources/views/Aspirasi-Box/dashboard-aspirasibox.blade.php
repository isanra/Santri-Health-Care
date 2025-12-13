<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Santri Health Care - Aspirasi Box</title>
    
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <body class="relative min-h-screen px-15 overflow-x-hidden pb-5">
    @include('components.navbar')

    <main id="page-content" class="mt-6 p-4">
      <div class="dashboard-aspirasi-container">
        <!-- Kolom 1: Menu Sidebar -->
        <div class="dashboard-aspirasi-sidebar">
          <h2 class="text-xl font-bold dashboard-aspirasi-primary-color mb-6">Aspirasi Box</h2>
          
          <div class="space-y-2">
            <!-- Menu Inbox -->
            <div class="dashboard-aspirasi-menu-item dashboard-aspirasi-menu-active">
              <div class="flex items-center gap-3">
                <i class="fas fa-inbox dashboard-aspirasi-primary-color"></i>
                <span class="font-medium">Inbox</span>
              </div>
              <span class="dashboard-aspirasi-badge dashboard-aspirasi-badge-inbox">15</span>
            </div>
            
            <!-- Menu Starry (dari gambar: Starry) -->
            <div class="dashboard-aspirasi-menu-item">
              <div class="flex items-center gap-3">
                <i class="fas fa-star dashboard-aspirasi-primary-color"></i>
                <span class="font-medium">Starry</span>
              </div>
              <span class="dashboard-aspirasi-badge dashboard-aspirasi-badge-starred">3</span>
            </div>
            
            <!-- Menu Unread -->
            <div class="dashboard-aspirasi-menu-item">
              <div class="flex items-center gap-3">
                <i class="fas fa-envelope dashboard-aspirasi-primary-color"></i>
                <span class="font-medium">Unread</span>
              </div>
              <span class="dashboard-aspirasi-badge dashboard-aspirasi-badge-unread">8</span>
            </div>
          </div>
        </div>
        
        <!-- Kolom 2: Daftar Chat -->
        <div class="dashboard-aspirasi-chat-list">
          <div class="p-4 border-b">
            <h3 class="text-lg font-bold dashboard-aspirasi-primary-color">Inbox</h3>
          </div>
          
          <div class="dashboard-aspirasi-scrollable p-2">
            <!-- Chat Item 1: Starry (Active) -->
            <div class="dashboard-aspirasi-chat-item dashboard-aspirasi-chat-item-active" data-chat-id="starry" data-chat-name="Starry" data-chat-status="online" data-chat-avatar="https://randomuser.me/api/portraits/men/32.jpg">
              <div class="dashboard-aspirasi-chat-content-wrapper">
                <div class="dashboard-aspirasi-chat-avatar">
                  <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Starry" class="w-12 h-12 rounded-full object-cover">
                  <span class="dashboard-aspirasi-status-indicator dashboard-aspirasi-status-online"></span>
                </div>
                <div class="dashboard-aspirasi-chat-info">
                  <div class="flex justify-between items-start">
                    <h4 class="dashboard-aspirasi-chat-name dashboard-aspirasi-primary-color">Starry</h4>
                    <span class="dashboard-aspirasi-chat-time">20 Minutes Ago *</span>
                  </div>
                  <p class="dashboard-aspirasi-chat-preview">Ustadz, saya capek banget hari ini...</p>
                </div>
                <div class="dashboard-aspirasi-unread-indicator"></div>
              </div>
            </div>
            
            <!-- Chat Item 2: Muhammad Ayyubi -->
            <div class="dashboard-aspirasi-chat-item" data-chat-id="ayyubi" data-chat-name="Muhammad Ayyubi" data-chat-status="offline" data-chat-avatar="https://randomuser.me/api/portraits/men/33.jpg">
              <div class="dashboard-aspirasi-chat-content-wrapper">
                <div class="dashboard-aspirasi-chat-avatar">
                  <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Muhammad Ayyubi" class="w-12 h-12 rounded-full object-cover">
                  <span class="dashboard-aspirasi-status-indicator dashboard-aspirasi-status-offline"></span>
                </div>
                <div class="dashboard-aspirasi-chat-info">
                  <div class="flex justify-between items-start">
                    <h4 class="dashboard-aspirasi-chat-name dashboard-aspirasi-primary-color">Muhammad Ayyubi</h4>
                    <span class="dashboard-aspirasi-chat-time">20 Minutes Ago *</span>
                  </div>
                  <p class="dashboard-aspirasi-chat-preview">Ayyubi: Ustadz, saya capek</p>
                </div>
                <div class="dashboard-aspirasi-unread-indicator"></div>
              </div>
            </div>
            
            <!-- Chat Item 3: Nevan Ghaftansyah (dari gambar) -->
            <div class="dashboard-aspirasi-chat-item" data-chat-id="nevan" data-chat-name="Nevan Ghaftansyah" data-chat-status="offline" data-chat-avatar="https://randomuser.me/api/portraits/men/34.jpg">
              <div class="dashboard-aspirasi-chat-content-wrapper">
                <div class="dashboard-aspirasi-chat-avatar">
                  <img src="https://randomuser.me/api/portraits/men/34.jpg" alt="Nevan Ghaftansyah" class="w-12 h-12 rounded-full object-cover">
                  <span class="dashboard-aspirasi-status-indicator dashboard-aspirasi-status-offline"></span>
                </div>
                <div class="dashboard-aspirasi-chat-info">
                  <div class="flex justify-between items-start">
                    <h4 class="dashboard-aspirasi-chat-name dashboard-aspirasi-primary-color">Nevan Ghaftansyah</h4>
                    <span class="dashboard-aspirasi-chat-time">1 Hour Ago</span>
                  </div>
                  <p class="dashboard-aspirasi-chat-preview">Nevan: Ustadz, saya capek</p>
                </div>
              </div>
            </div>
            
            <!-- Chat Item 4: Ihsan Ramadhan (dari gambar) -->
            <div class="dashboard-aspirasi-chat-item" data-chat-id="ihsan" data-chat-name="Ihsan Ramadhan" data-chat-status="offline" data-chat-avatar="https://randomuser.me/api/portraits/men/36.jpg">
              <div class="dashboard-aspirasi-chat-content-wrapper">
                <div class="dashboard-aspirasi-chat-avatar">
                  <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="Ihsan Ramadhan" class="w-12 h-12 rounded-full object-cover">
                  <span class="dashboard-aspirasi-status-indicator dashboard-aspirasi-status-offline"></span>
                </div>
                <div class="dashboard-aspirasi-chat-info">
                  <div class="flex justify-between items-start">
                    <h4 class="dashboard-aspirasi-chat-name">Ihsan Ramadhan</h4>
                    <span class="dashboard-aspirasi-chat-time">27 Minutes Ago</span>
                  </div>
                  <p class="dashboard-aspirasi-chat-preview">Ihsan: Ustadz, saya capek</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Bottom Navigation untuk Mobile -->
          <div class="dashboard-aspirasi-mobile-nav">
            <button class="dashboard-aspirasi-mobile-nav-btn active" data-target="chat-list">
              <i class="fas fa-comments"></i>
              <span>Chats</span>
            </button>
            <button class="dashboard-aspirasi-mobile-nav-btn" data-target="starred">
              <i class="fas fa-star"></i>
              <span>Starry</span>
            </button>
            <button class="dashboard-aspirasi-mobile-nav-btn" data-target="unread">
              <i class="fas fa-envelope"></i>
              <span>Unread</span>
            </button>
          </div>
        </div>
        
        <!-- Kolom 3: Isi Pesan -->
        <div class="dashboard-aspirasi-chat-content">
          <!-- Header Chat dengan Tombol Back untuk Mobile -->
          <div class="p-4 border-b flex items-center justify-between">
            <div class="flex items-center gap-3">
              <!-- Tombol Back hanya tampil di mobile -->
              <button class="dashboard-aspirasi-mobile-back-btn">
                <i class="fas fa-arrow-left text-gray-600 text-xl"></i>
              </button>
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Starry" class="w-10 h-10 rounded-full object-cover" id="chatAvatar">
              <div>
                <h3 class="font-bold text-gray-900" id="chatName">Starry</h3>
                <p class="text-xs text-green-600 flex items-center gap-1" id="chatStatus">
                  <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                  Online
                </p>
              </div>
            </div>
            <div class="flex items-center gap-3 text-gray-500">
              <button class="dashboard-aspirasi-action-btn p-2 hover:bg-gray-100 rounded-full" data-action="call">
                <i class="fas fa-phone"></i>
              </button>
              <button class="dashboard-aspirasi-action-btn p-2 hover:bg-gray-100 rounded-full" data-action="video">
                <i class="fas fa-video"></i>
              </button>
              <button class="dashboard-aspirasi-action-btn p-2 hover:bg-gray-100 rounded-full" data-action="more">
                <i class="fas fa-ellipsis-v"></i>
              </button>
            </div>
          </div>
          
          <!-- Area Chat Messages -->
          <div class="dashboard-aspirasi-scrollable p-4 space-y-4" id="chatMessages">
            <!-- Message Container untuk Starry (Default) -->
            <div class="chat-messages" data-chat-id="starry">
              <!-- Message from Starry -->
              <div class="flex justify-start">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-received">
                  <p class="text-gray-900">Ustadz, saya capek banget hari ini. Sudah 3 hari ini saya kurang tidur karena harus menyelesaikan tugas-tugas pondok.</p>
                  <span class="dashboard-aspirasi-message-time">20 Minutes Ago</span>
                </div>
              </div>
              
              <!-- Reply Message -->
              <div class="flex justify-end">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-sent">
                  <p class="text-gray-900">Wa'alaikumussalam Starry. Iya, saya perhatikan akhir-akhir ini kamu memang terlihat lelah. Kamu sudah coba atur jadwal tidurmu?</p>
                  <span class="dashboard-aspirasi-message-time">15 Minutes Ago</span>
                </div>
              </div>
              
              <!-- Message from Starry -->
              <div class="flex justify-start">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-received">
                  <p class="text-gray-900">Sudah Ustadz, tapi setiap mau tidur selalu ada pikiran tentang tugas yang belum selesai. Kadang sampai jam 2 pagi masih belum bisa tidur.</p>
                  <span class="dashboard-aspirasi-message-time">10 Minutes Ago</span>
                </div>
              </div>
              
              <!-- Reply Message -->
              <div class="flex justify-end">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-sent">
                  <p class="text-gray-900">Coba besok kita bertemu setelah shubuh ya. Saya ada beberapa tips manajemen waktu yang bisa membantu. Yang penting sekarang kamu coba rileks dulu, baca Al-Ma'tsurat sebelum tidur.</p>
                  <span class="dashboard-aspirasi-message-time">5 Minutes Ago</span>
                </div>
              </div>
              
              <!-- Message from Starry -->
              <div class="flex justify-start">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-received">
                  <p class="text-gray-900">Baik Ustadz, terima kasih banyak atas perhatiannya. Saya akan coba ikuti saran Ustadz. Besok setelah shubuh saya tunggu di ruangan Ustadz.</p>
                  <span class="dashboard-aspirasi-message-time">Just Now</span>
                </div>
              </div>
            </div>
            
            <!-- Message Container untuk Ayyubi (Hidden by default) -->
            <div class="chat-messages hidden" data-chat-id="ayyubi">
              <div class="flex justify-start">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-received">
                  <p class="text-gray-900">Ustadz, saya capek. Sudah seharian mengikuti kegiatan pondok.</p>
                  <span class="dashboard-aspirasi-message-time">20 Minutes Ago</span>
                </div>
              </div>
              
              <div class="flex justify-end">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-sent">
                  <p class="text-gray-900">Wa'alaikumussalam Ayyubi. Istirahat yang cukup ya. Jangan lupa minum air putih yang banyak.</p>
                  <span class="dashboard-aspirasi-message-time">15 Minutes Ago</span>
                </div>
              </div>
            </div>
            
            <!-- Message Container untuk Nevan -->
            <div class="chat-messages hidden" data-chat-id="nevan">
              <div class="flex justify-start">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-received">
                  <p class="text-gray-900">Ustadz, saya ada masalah dengan jadwal belajar saya.</p>
                  <span class="dashboard-aspirasi-message-time">1 Hour Ago</span>
                </div>
              </div>
              
              <div class="flex justify-end">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-sent">
                  <p class="text-gray-900">Bisa dijelaskan lebih detail Nevan? Apa yang membuat jadwal belajarmu terganggu?</p>
                  <span class="dashboard-aspirasi-message-time">55 Minutes Ago</span>
                </div>
              </div>
            </div>
            
            <!-- Message Container untuk Ihsan -->
            <div class="chat-messages hidden" data-chat-id="ihsan">
              <div class="flex justify-start">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-received">
                  <p class="text-gray-900">Ustadz, saya merasa kurang motivasi belakangan ini.</p>
                  <span class="dashboard-aspirasi-message-time">27 Minutes Ago</span>
                </div>
              </div>
              
              <div class="flex justify-end">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-sent">
                  <p class="text-gray-900">Ihsan, itu wajar terjadi. Kadang kita memang butuh refreshing. Coba kita bicarakan besok setelah shalat Ashar.</p>
                  <span class="dashboard-aspirasi-message-time">25 Minutes Ago</span>
                </div>
              </div>
            </div>
            
            <!-- Message Container untuk Muhammad Fitra (dari gambar) -->
            <div class="chat-messages hidden" data-chat-id="fitra">
              <div class="flex justify-start">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-received">
                  <p class="text-gray-900">Ustadz, saya punya masalah dengan makanan di kantin hari ini.</p>
                  <span class="dashboard-aspirasi-message-time">20 Minutes Ago *</span>
                </div>
              </div>
              
              <div class="flex justify-end">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-sent">
                  <p class="text-gray-900">Boleh diceritakan Fitra, ada masalah apa dengan makanan di kantin?</p>
                  <span class="dashboard-aspirasi-message-time">15 Minutes Ago</span>
                </div>
              </div>
              
              <div class="flex justify-start">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-received">
                  <p class="text-gray-900">Makanannya kurang bersih Ustadz. Saya lihat ada beberapa lalat di sekitar area makanan.</p>
                  <span class="dashboard-aspirasi-message-time">10 Minutes Ago</span>
                </div>
              </div>
              
              <div class="flex justify-end">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-sent">
                  <p class="text-gray-900">Terima kasih informasinya Fitra. Saya akan laporkan ke bagian dapur untuk segera ditangani. Besok akan saya cek langsung ke kantin.</p>
                  <span class="dashboard-aspirasi-message-time">5 Minutes Ago</span>
                </div>
              </div>
              
              <div class="flex justify-start">
                <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-received">
                  <p class="text-gray-900">Siap Ustadz. Terima kasih atas perhatiannya.</p>
                  <span class="dashboard-aspirasi-message-time">Just Now</span>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Input Message -->
          <div class="p-4 border-t">
            <div class="flex items-center gap-3">
              <button class="dashboard-aspirasi-input-btn p-3 text-gray-500 hover:text-blue-600" data-action="attach">
                <i class="fas fa-plus"></i>
              </button>
              <div class="flex-1 bg-gray-100 rounded-full px-4 py-3">
                <input type="text" id="dashboardAspirasiMessageInput" placeholder="Ketik pesan..." class="w-full bg-transparent outline-none text-gray-900">
              </div>
              <button class="dashboard-aspirasi-input-btn p-3 text-gray-500 hover:text-blue-600" data-action="voice">
                <i class="fas fa-microphone"></i>
              </button>
              <button class="dashboard-aspirasi-send-btn p-3 bg-blue-600 text-white rounded-full hover:bg-blue-700">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>