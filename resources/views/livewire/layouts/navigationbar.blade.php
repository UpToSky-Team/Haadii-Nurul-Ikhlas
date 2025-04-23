<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:wght@100..900&family=Poppins:wght@100..900&display=swap" rel="stylesheet">

    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        inter: ['Inter', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        primary: '#3B9B3C',  // Green color
                        secondary: '#FDC261',  // Yellow color
                        neutral: '#F5F5F5',  // Light background
                    }
                }
            }
        }
    </script>
    <style>
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-8px);
            transition: opacity 0.3s ease-in-out, transform 0.35s ease-in-out, visibility 0.3s linear;
        }

        .group:hover .dropdown-menu,
        .dropdown-open {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
            transition-delay: 100ms;
        }

    </style>
</head>
<body class="text-primary font-poppins bg-neutral">
    <header class="fixed top-6 left-1/2 transform -translate-x-1/2 w-[90%] bg-white/60 backdrop-blur-md shadow-md rounded-full px-8 py-3 flex justify-between items-center z-50">
        <div class="lex items-center space-x-3">
            <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                    <img src="{{ $yayasan->isNotEmpty() && $yayasan->first()->logo ? Storage::url($yayasan->first()->logo) : '/img/logoyayasan.png' }}" alt="Logo" class="h-10">
                </div>
                <a href="/" class="hidden sm:inline-block text-xl font-bold text-primary">
                    {{ $yayasan->isNotEmpty() && $yayasan->first()->nama ? $yayasan->first()->nama : 'Yayasan Haadii Nurul Ikhlas' }}
                </a>
            </div>
        </div>

        <button id="menu-btn" class="lg:hidden text-primary focus:outline-none z-50 relative p-2 rounded-md transition-all duration-300 hover:bg-white/20 active:scale-90">
            <svg id="menu-icon" class="w-7 h-7 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <nav id="menu" class="fixed hidden lg:flex flex-col lg:flex-row items-start lg:items-center lg:space-x-6 bg-white lg:bg-transparent p-5 lg:p-0 w-full lg:w-auto lg:relative top-16 lg:top-0 left-0 z-50">
            <a href="/" class="block text-primary hover:text-secondary py-2">Beranda</a>

            <div class="relative group">
                <button class="text-primary px-4 py-2 flex items-center dropdown-toggle hover:text-secondary">Profil
                    <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white border border-primary rounded-md shadow-md z-50">
                    <ul class="py-2 text-sm text-gray-700">
                        <li><a href="/sejarah" class="block px-4 py-2 hover:text-secondary">Sejarah</a></li>
                        <li><a href="/visi-misi" class="block px-4 py-2 hover:text-secondary">Visi Misi</a></li>
                        <li><a href="/maksud-tujuan" class="block px-4 py-2 hover:text-secondary">Maksud dan Tujuan</a></li>
                        <li><a href="/struktur-yayasan" class="block px-4 py-2 hover:text-secondary">Struktur Yayasan</a></li>
                    </ul>
                </div>
            </div>

            <div class="relative group">
                <button class="text-primary px-4 py-2 flex items-center w-full lg:w-auto dropdown-toggle hover:text-secondary">
                    Program
                    <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white border border-primary rounded-md shadow-md z-50">
                    <ul class="py-2 text-sm text-gray-700">
                        <li><a href="/penerimaan-murid-baru" class="block px-4 py-2 hover:text-secondary">Penerimaan Murid Baru</a></li>
                        <li><a href="/rincian-kegiatan" class="block px-4 py-2 hover:text-secondary">Rincian Kegiatan</a></li>
                    </ul>
                </div>
            </div>

            <a href="/layanan-donasi" class="block text-primary hover:text-secondary py-2">Layanan Donasi</a>
            <a href="/publikasi" class="block text-primary hover:text-secondary py-2">Publikasi</a>
            <a href="/hubungi-kami" class="block text-primary hover:text-secondary py-2">Hubungi Kami</a>
        </nav>
    </header>

    <script>
        const menuBtn = document.getElementById("menu-btn");
        const menu = document.getElementById("menu");

        menuBtn.addEventListener("click", function () {
            menu.classList.toggle("hidden");
        });

        document.querySelectorAll(".dropdown-toggle").forEach(button => {
            button.addEventListener("click", function (event) {
                event.stopPropagation();
                const dropdown = this.nextElementSibling;
                dropdown.classList.toggle("dropdown-open");
            });
        });

        document.addEventListener("click", function (event) {
            if (!menu.contains(event.target) && !menuBtn.contains(event.target)) {
                menu.classList.add("hidden");
            }
            document.querySelectorAll(".dropdown-menu").forEach(dropdown => {
                if (!dropdown.parentElement.contains(event.target)) {
                    dropdown.classList.remove("dropdown-open");
                }
            });
        });
    </script>
</body>
</html>
