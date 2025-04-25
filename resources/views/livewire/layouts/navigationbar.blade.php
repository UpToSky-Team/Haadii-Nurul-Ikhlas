  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            inter: ['Inter', 'sans-serif'],
          },
          colors: {
            primary: '#2F855A',
            secondary: '#ECC94B',
            background: '#FAFAFA',
          },
        },
      },
    }
  </script>

<style>
    .dropdown-menu {
      opacity: 0;
      visibility: hidden;
      transform: translateY(-10px);
      transition: all 0.3s ease;
    }

    .group:hover .dropdown-menu,
    .dropdown-open {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateY(0) !important;
    }

    @media (max-width: 1023px) {
      .dropdown-menu {
        position: static !important;
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        display: none;
      }

      .dropdown-open {
        display: block !important;
      }
    }
  </style>

</head>
<body class="font-inter bg-background text-primary">

  <header class="fixed top-6 left-1/2 transform -translate-x-1/2 w-[92%] bg-white/70 backdrop-blur-md shadow-lg rounded-full px-6 py-3 flex justify-between items-center z-50">
    <div class="flex items-center space-x-3">
      <img src="/img/logoyayasan.png" alt="Logo" class="w-10 h-10 rounded-full object-contain bg-white shadow" />
      <span class="text-lg font-semibold hidden sm:block">Yayasan HNI</span>
    </div>

    <button id="menu-btn" class="lg:hidden text-primary p-2 rounded-md hover:bg-primary/10">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>

    <nav id="menu" class="fixed hidden lg:flex flex-col lg:flex-row bg-white lg:bg-transparent w-full lg:w-auto left-0 top-16 lg:top-0 lg:relative items-start lg:items-center p-5 lg:p-0 z-40 space-y-2 lg:space-y-0 lg:space-x-6 rounded-xl shadow lg:shadow-none md:px-">
      <a href="/" class="hover:text-secondary transition">Beranda</a>

      <div class="relative group">
        <button class="dropdown-toggle flex items-center gap-1 hover:text-secondary">
          Profil
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 10 6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <div class="dropdown-menu absolute mt-2 bg-white border border-gray-200 shadow-md rounded-md w-44 z-50">
          <ul class="text-sm text-gray-700">
            <li><a href="/sejarah" class="block px-4 py-2 hover:bg-gray-50">Sejarah</a></li>
            <li><a href="/visi-misi" class="block px-4 py-2 hover:bg-gray-50">Visi Misi</a></li>
            <li><a href="/maksud-tujuan" class="block px-4 py-2 hover:bg-gray-50">Maksud & Tujuan</a></li>
            <li><a href="/struktur-yayasan" class="block px-4 py-2 hover:bg-gray-50">Struktur Yayasan</a></li>
          </ul>
        </div>
      </div>

      <div class="relative group">
        <button class="dropdown-toggle flex items-center gap-1 hover:text-secondary">
          Program
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 10 6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <div class="dropdown-menu absolute mt-2 bg-white border border-gray-200 shadow-md rounded-md w-52 z-50">
          <ul class="text-sm text-gray-700">
            <li><a href="/penerimaan-murid-baru" class="block px-4 py-2 hover:bg-gray-50">Penerimaan Murid Baru</a></li>
            <li><a href="/rincian-kegiatan" class="block px-4 py-2 hover:bg-gray-50">Rincian Kegiatan</a></li>
          </ul>
        </div>
      </div>
      <div class="">
          <a href="/layanan-donasi" class="hover:text-secondary transition">Donasi</a>
      </div>
      <div class="">
          <a href="/publikasi" class="hover:text-secondary transition">Publikasi</a>
      </div>
      <div class="">
          <a href="/hubungi-kami" class="hover:text-secondary transition">Kontak</a>
      </div>
    </nav>
  </header>

  <script>
    const menuBtn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");

    menuBtn.addEventListener("click", () => {
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
