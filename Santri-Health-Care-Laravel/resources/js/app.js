// Mobile menu functionality
const mobileMenu = document.getElementById("mobileMenu");
const closeMenu = document.getElementById("closeMenu");
const menuButton = document.querySelector(".md\\:hidden button");

menuButton.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
});

closeMenu.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
});

document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector("nav");
    const highlight = document.getElementById("navHighlight");
    const activeLink = document.querySelector(".nav-link.active");

    if (!nav || !highlight || !activeLink) return;

    const navRect = nav.getBoundingClientRect();
    const linkRect = activeLink.getBoundingClientRect();

    const leftPos = linkRect.left - navRect.left;
    const width = linkRect.width;

    highlight.style.transform = `translateX(${leftPos}px)`;
    highlight.style.width = `${width}px`;
    highlight.style.opacity = 1;
});

// Asisten kesehatan

document.querySelectorAll(".option-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
        const parent = btn.parentElement;
        parent
            .querySelectorAll(".option-btn")
            .forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
    });
});

// Dashboard
// dashboard.js

document.addEventListener("DOMContentLoaded", function () {
    // Filter functionality
    const filterSelects = document.querySelectorAll(".filter-select");
    const filterInput = document.querySelector(".filter-input");
    const timeFilters = document.querySelectorAll(".time-filter");

    // Time filter functionality
    timeFilters.forEach((filter) => {
        filter.addEventListener("click", function () {
            // Remove active class from all filters
            timeFilters.forEach((f) => f.classList.remove("active"));
            // Add active class to clicked filter
            this.classList.add("active");

            // Here you would typically fetch new data based on the selected time filter
            console.log("Time filter changed to:", this.textContent);
        });
    });

    // Search functionality
    if (filterInput) {
        filterInput.addEventListener("input", function (e) {
            const searchTerm = e.target.value.toLowerCase();
            filterTable(searchTerm);
        });
    }

    // Table filtering function
    function filterTable(searchTerm) {
        const table = document.querySelector("table");
        const rows = table.querySelectorAll("tbody tr");

        rows.forEach((row) => {
            const name = row.cells[1].textContent.toLowerCase();
            const kelas = row.cells[2].textContent.toLowerCase();
            const sakitSejak = row.cells[3].textContent.toLowerCase();

            if (
                name.includes(searchTerm) ||
                kelas.includes(searchTerm) ||
                sakitSejak.includes(searchTerm)
            ) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }

    // Class filter functionality
    filterSelects.forEach((select) => {
        select.addEventListener("change", function () {
            // Here you would typically filter the table based on selected class/penyakit
            console.log("Filter changed:", this.value);
        });
    });
});

// Manajemen obat
const filterBtn = document.getElementById("filterToggle");
const dropdown = document.getElementById("filterDropdown");

filterBtn.addEventListener("click", () => {
    dropdown.classList.toggle("hidden");
});

// Klik di luar dropdown = tutup
document.addEventListener("click", (e) => {
    if (!filterBtn.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.add("hidden");
    }
});

// Aspirasi Box
// dashboard-aspirasibox

// ============================================
// DASHBOARD ASPIRASI RESPONSIVE JAVASCRIPT
// ============================================

// Global variables untuk track state
let dashboardAspirasiIsMobile = false;
let dashboardAspirasiCurrentChatId = 'starry';

document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.dashboard-aspirasi-container')) {
        dashboardAspirasiResponsiveInit();
    }
});

function dashboardAspirasiResponsiveInit() {
    console.log('Dashboard Aspirasi Responsive initialized');
    
    // Check screen size
    dashboardAspirasiIsMobile = window.innerWidth <= 767;
    
    // Setup initial mobile state
    dashboardAspirasiSetupMobileNav();
    
    // Setup all event listeners
    dashboardAspirasiSetupAllEventListeners();
    
    // Setup back button
    dashboardAspirasiSetupBackButton();
    
    // Setup mobile navigation buttons
    dashboardAspirasiSetupMobileNavButtons();
    
    // Inisialisasi chat pertama sebagai active
    const firstChatItem = document.querySelector('.dashboard-aspirasi-chat-item');
    if (firstChatItem && !dashboardAspirasiIsMobile) {
        const chatId = firstChatItem.dataset.chatId;
        const chatName = firstChatItem.dataset.chatName;
        const chatAvatar = firstChatItem.dataset.chatAvatar;
        const chatStatus = firstChatItem.dataset.chatStatus;
        
        dashboardAspirasiUpdateChatHeader(chatName, chatAvatar, chatStatus);
        dashboardAspirasiShowChatMessages(chatId);
        firstChatItem.classList.add('dashboard-aspirasi-chat-item-active');
        dashboardAspirasiCurrentChatId = chatId;
    }
}

function dashboardAspirasiSetupAllEventListeners() {
    // Menu item click handler
    const menuItems = document.querySelectorAll('.dashboard-aspirasi-menu-item');
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.stopPropagation();
            dashboardAspirasiHandleMenuClick(this);
        });
    });
    
    // Chat item click handler
    const chatItems = document.querySelectorAll('.dashboard-aspirasi-chat-item');
    chatItems.forEach(item => {
        // Remove any existing listeners first
        item.removeEventListener('click', dashboardAspirasiHandleChatClick);
        // Add new listener
        item.addEventListener('click', dashboardAspirasiHandleChatClick);
    });
    
    // Action buttons
    const actionButtons = document.querySelectorAll('.dashboard-aspirasi-action-btn');
    actionButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const action = this.dataset.action;
            dashboardAspirasiHandleAction(action);
        });
    });
    
    // Input buttons
    const inputButtons = document.querySelectorAll('.dashboard-aspirasi-input-btn');
    inputButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const action = this.dataset.action;
            dashboardAspirasiHandleInputAction(action);
        });
    });
    
    // Send message functionality
    const sendBtn = document.querySelector('.dashboard-aspirasi-send-btn');
    const messageInput = document.getElementById('dashboardAspirasiMessageInput');
    
    if (sendBtn && messageInput) {
        sendBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            dashboardAspirasiSendMessage();
        });
        
        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.stopPropagation();
                dashboardAspirasiSendMessage();
            }
        });
    }
}

function dashboardAspirasiHandleChatClick() {
    console.log('Chat item clicked:', this.dataset.chatId);
    
    // Remove active class from all chat items
    const chatItems = document.querySelectorAll('.dashboard-aspirasi-chat-item');
    chatItems.forEach(item => {
        item.classList.remove('dashboard-aspirasi-chat-item-active');
    });
    
    // Add active class to clicked item
    this.classList.add('dashboard-aspirasi-chat-item-active');
    
    // Get chat data
    const chatId = this.dataset.chatId;
    const chatName = this.dataset.chatName;
    const chatStatus = this.dataset.chatStatus;
    const chatAvatar = this.dataset.chatAvatar;
    
    // Update current chat ID
    dashboardAspirasiCurrentChatId = chatId;
    
    // Update chat header
    dashboardAspirasiUpdateChatHeader(chatName, chatAvatar, chatStatus);
    
    // Show messages for this chat
    dashboardAspirasiShowChatMessages(chatId);
    
    // Remove unread indicator
    const unreadIndicator = this.querySelector('.dashboard-aspirasi-unread-indicator');
    if (unreadIndicator) {
        unreadIndicator.remove();
    }
    
    // If mobile, switch to chat content view
    if (dashboardAspirasiIsMobile) {
        dashboardAspirasiSwitchToChatContent();
    }
}

function dashboardAspirasiSetupMobileNav() {
    // Mobile mode - setup initial state
    if (dashboardAspirasiIsMobile) {
        const chatList = document.querySelector('.dashboard-aspirasi-chat-list');
        const chatContent = document.querySelector('.dashboard-aspirasi-chat-content');
        
        if (chatList && chatContent) {
            // Show chat list, hide chat content initially
            chatList.classList.remove('hidden');
            chatContent.classList.remove('active');
            chatContent.style.display = 'none';
        }
    } else {
        // Desktop mode - ensure all columns are visible
        document.querySelectorAll('.dashboard-aspirasi-sidebar, .dashboard-aspirasi-chat-list, .dashboard-aspirasi-chat-content').forEach(el => {
            el.style.display = '';
        });
    }
}

function dashboardAspirasiSwitchToChatContent() {
    const chatList = document.querySelector('.dashboard-aspirasi-chat-list');
    const chatContent = document.querySelector('.dashboard-aspirasi-chat-content');
    
    if (chatList && chatContent) {
        chatList.classList.add('hidden');
        chatContent.classList.add('active');
        chatContent.style.display = 'flex';
    }
}

function dashboardAspirasiSwitchToChatList() {
    const chatList = document.querySelector('.dashboard-aspirasi-chat-list');
    const chatContent = document.querySelector('.dashboard-aspirasi-chat-content');
    
    if (chatList && chatContent) {
        chatList.classList.remove('hidden');
        chatContent.classList.remove('active');
        chatContent.style.display = 'none';
    }
}

function dashboardAspirasiUpdateChatHeader(chatName, chatAvatar, chatStatus) {
    const chatNameElement = document.getElementById('chatName');
    const chatAvatarElement = document.getElementById('chatAvatar');
    const statusElement = document.getElementById('chatStatus');
    
    if (chatNameElement) chatNameElement.textContent = chatName;
    if (chatAvatarElement && chatAvatar) chatAvatarElement.src = chatAvatar;
    
    if (statusElement) {
        if (chatStatus === 'online') {
            statusElement.innerHTML = '<span class="w-2 h-2 bg-green-500 rounded-full"></span> Online';
            statusElement.className = 'text-xs text-green-600 flex items-center gap-1';
        } else {
            statusElement.innerHTML = '<span class="w-2 h-2 bg-gray-400 rounded-full"></span> Offline';
            statusElement.className = 'text-xs text-gray-600 flex items-center gap-1';
        }
    }
}

function dashboardAspirasiShowChatMessages(chatId) {
    console.log('Showing messages for chat:', chatId);
    
    // Hide all chat messages
    const allChatMessages = document.querySelectorAll('.chat-messages');
    allChatMessages.forEach(chat => {
        chat.classList.add('hidden');
    });
    
    // Show messages for selected chat
    const targetChat = document.querySelector(`.chat-messages[data-chat-id="${chatId}"]`);
    if (targetChat) {
        targetChat.classList.remove('hidden');
        
        // Scroll to bottom of messages
        setTimeout(() => {
            targetChat.scrollTop = targetChat.scrollHeight;
        }, 100);
    } else {
        console.log('Chat messages not found for:', chatId);
        // Show default chat if not found
        const defaultChat = document.querySelector('.chat-messages[data-chat-id="default"]');
        if (defaultChat) {
            defaultChat.classList.remove('hidden');
        }
    }
}

function dashboardAspirasiSetupBackButton() {
    const backButton = document.querySelector('.dashboard-aspirasi-mobile-back-btn');
    
    if (backButton) {
        // Remove existing listener
        backButton.removeEventListener('click', dashboardAspirasiHandleBackClick);
        // Add new listener
        backButton.addEventListener('click', dashboardAspirasiHandleBackClick);
    }
}

function dashboardAspirasiHandleBackClick() {
    if (dashboardAspirasiIsMobile) {
        dashboardAspirasiSwitchToChatList();
    }
}

function dashboardAspirasiSetupMobileNavButtons() {
    const navButtons = document.querySelectorAll('.dashboard-aspirasi-mobile-nav-btn');
    
    navButtons.forEach(button => {
        button.removeEventListener('click', dashboardAspirasiHandleNavButtonClick);
        button.addEventListener('click', dashboardAspirasiHandleNavButtonClick);
    });
}

function dashboardAspirasiHandleNavButtonClick() {
    // Update active state
    const navButtons = document.querySelectorAll('.dashboard-aspirasi-mobile-nav-btn');
    navButtons.forEach(btn => {
        btn.classList.remove('active');
    });
    this.classList.add('active');
    
    // Get target section
    const target = this.dataset.target;
    
    // Handle different navigation targets
    switch(target) {
        case 'chat-list':
            // Switch to chat list view
            if (dashboardAspirasiIsMobile) {
                dashboardAspirasiSwitchToChatList();
            }
            dashboardAspirasiFilterChats('all');
            break;
        case 'starred':
            // Filter to show only starred chats
            dashboardAspirasiFilterChats('starred');
            break;
        case 'unread':
            // Filter to show only unread chats
            dashboardAspirasiFilterChats('unread');
            break;
    }
}

function dashboardAspirasiFilterChats(filterType) {
    const chatItems = document.querySelectorAll('.dashboard-aspirasi-chat-item');
    
    chatItems.forEach(item => {
        switch(filterType) {
            case 'starred':
                // For demonstration, show Starry and Muhammad Ayyubi
                if (item.dataset.chatId === 'starry' || item.dataset.chatId === 'ayyubi') {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
                break;
            case 'unread':
                // Show only items with unread indicator
                const hasUnread = item.querySelector('.dashboard-aspirasi-unread-indicator');
                item.style.display = hasUnread ? '' : 'none';
                break;
            default:
                item.style.display = '';
        }
    });
}

// Fungsi-fungsi yang sudah ada dari kode sebelumnya
function dashboardAspirasiHandleMenuClick(menuItem) {
    // Remove active class from all menu items
    const menuItems = document.querySelectorAll('.dashboard-aspirasi-menu-item');
    menuItems.forEach(i => {
        i.classList.remove('dashboard-aspirasi-menu-active');
    });
    
    // Add active class to clicked item
    menuItem.classList.add('dashboard-aspirasi-menu-active');
    
    // Update chat list header based on selected menu
    const menuText = menuItem.querySelector('span').textContent;
    const chatHeader = document.querySelector('.dashboard-aspirasi-chat-list h3');
    if (chatHeader) {
        chatHeader.textContent = menuText;
    }
}

function dashboardAspirasiHandleAction(action) {
    console.log(`Dashboard Aspirasi Action: ${action}`);
    
    const activeChat = document.querySelector('.dashboard-aspirasi-chat-item-active');
    const chatName = activeChat ? activeChat.dataset.chatName : 'User';
    
    switch(action) {
        case 'call':
            alert(`Memanggil ${chatName}...`);
            break;
        case 'video':
            alert(`Memulai video call dengan ${chatName}...`);
            break;
        case 'more':
            alert(`Menu lebih banyak untuk ${chatName}`);
            break;
    }
}

function dashboardAspirasiHandleInputAction(action) {
    console.log(`Dashboard Aspirasi Input Action: ${action}`);
    
    switch(action) {
        case 'attach':
            alert('Mengunggah file...');
            break;
        case 'voice':
            alert('Merekam pesan suara...');
            break;
    }
}

function dashboardAspirasiSendMessage() {
    const messageInput = document.getElementById('dashboardAspirasiMessageInput');
    if (!messageInput) return;
    
    const message = messageInput.value.trim();
    if (!message) return;
    
    const now = new Date();
    const timeString = `${now.getHours()}:${now.getMinutes().toString().padStart(2, '0')}`;
    
    // Find the active chat messages container
    let chatContainer = document.querySelector(`.chat-messages[data-chat-id="${dashboardAspirasiCurrentChatId}"]`);
    if (!chatContainer) {
        chatContainer = document.querySelector('.chat-messages[data-chat-id="default"]');
    }
    
    if (!chatContainer) return;
    
    // Create new message
    const messageDiv = document.createElement('div');
    messageDiv.className = 'flex justify-end';
    messageDiv.innerHTML = `
    <div class="dashboard-aspirasi-message-bubble dashboard-aspirasi-message-sent">
      <p class="text-gray-900">${message}</p>
      <span class="dashboard-aspirasi-message-time">${timeString}</span>
    </div>
  `;
    
    chatContainer.appendChild(messageDiv);
    messageInput.value = '';
    
    // Scroll to bottom
    setTimeout(() => {
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }, 100);
}

// Handle window resize
window.addEventListener('resize', function() {
    dashboardAspirasiIsMobile = window.innerWidth <= 767;
    dashboardAspirasiSetupMobileNav();
});

// Make functions available globally if needed
window.dashboardAspirasiResponsive = {
    init: dashboardAspirasiResponsiveInit,
    switchToChatContent: dashboardAspirasiSwitchToChatContent,
    switchToChatList: dashboardAspirasiSwitchToChatList,
    updateChatHeader: dashboardAspirasiUpdateChatHeader,
    showChatMessages: dashboardAspirasiShowChatMessages
};

// Initialize on load
dashboardAspirasiResponsiveInit();