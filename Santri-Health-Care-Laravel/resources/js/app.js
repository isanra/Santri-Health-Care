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
