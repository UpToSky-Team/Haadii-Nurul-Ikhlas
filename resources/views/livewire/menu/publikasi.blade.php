<body class="bg-gray-100 font-sans text-gray-800">

    <div class="max-w-6xl mx-auto pt-[120px] px-6 sm:px-6 lg:px-8 py-10">
      <!-- Judul -->
      <h1 class="text-3xl sm:text-4xl font-bold mb-8 text-center">Publikasi</h1>

      <!-- Tabs -->
      <div class="flex flex-wrap justify-center gap-2 mb-10">
        <button onclick="showTab(event, 'berita')" class="tab-button bg-blue-500 text-white px-4 py-2 rounded-lg text-sm sm:text-base">Berita</button>
        <button onclick="showTab(event, 'artikel')" class="tab-button bg-gray-200 text-gray-800 px-4 py-2 rounded-lg text-sm sm:text-base">Artikel</button>
        <button onclick="showTab(event, 'dokumentasi')" class="tab-button bg-gray-200 text-gray-800 px-4 py-2 rounded-lg text-sm sm:text-base">Dokumentasi</button>
      </div>

      <!-- Tab Berita -->
      <div id="berita" class="tab-content">
        <h2 class="text-xl sm:text-2xl font-semibold mb-4">Berita Pilihan</h2>
        <a href="/detail-berita" class="block bg-white p-5 rounded-xl shadow hover:shadow-md transition-transform duration-300 hover:scale-105">
          <h3 class="font-semibold text-lg mb-1">Peluncuran Program Pendidikan Digital</h3>
          <p class="text-gray-600 mb-1">Pemerintah meluncurkan program digitalisasi sekolah...</p>
          <p class="text-sm text-gray-500">Tanggal: 5 April 2025</p>
        </a>
      </div>

      <!-- Tab Artikel -->
      <div id="artikel" class="tab-content hidden">
        <h2 class="text-xl sm:text-2xl font-semibold mb-4">Artikel Pilihan</h2>
        <a href="/detail-artikel" class="block bg-white p-5 rounded-xl shadow hover:shadow-md transition-transform duration-300 hover:scale-105">
          <h3 class="font-semibold text-lg mb-1">Pentingnya Literasi Digital</h3>
          <p class="text-gray-600 mb-1">Artikel ini membahas pentingnya literasi digital bagi generasi muda...</p>
          <p class="text-sm text-gray-500">Oleh: Rina Dewi | 2 April 2025</p>
        </a>
      </div>

      <!-- Tab Dokumentasi -->
      <div id="dokumentasi" class="tab-content hidden">
        <h2 class="text-xl sm:text-2xl font-semibold mb-4">Galeri Dokumentasi</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
          <a href="/img/fotoketiga.png" data-lightbox="galeri">
            <img src="/img/fotoketiga.png" alt="Dokumentasi 1" class="rounded-lg shadow transition-transform duration-300 hover:scale-105">
          </a>
          <a href="/img/fotoketiga.png" data-lightbox="galeri">
            <img src="/img/fotoketiga.png" alt="Dokumentasi 2" class="rounded-lg shadow transition-transform duration-300 hover:scale-105">
          </a>
          <a href="/img/fotoketiga.png" data-lightbox="galeri">
            <img src="/img/fotoketiga.png" alt="Dokumentasi 3" class="rounded-lg shadow transition-transform duration-300 hover:scale-105">
          </a>
          <a href="/img/fotoketiga.png" data-lightbox="galeri">
            <img src="/img/fotoketiga.png" alt="Dokumentasi 4" class="rounded-lg shadow transition-transform duration-300 hover:scale-105">
          </a>
        </div>
      </div>
    </div>

    <script>
      function showTab(event, tabId) {
        const tabs = document.querySelectorAll('.tab-content');
        const buttons = document.querySelectorAll('.tab-button');

        buttons.forEach(btn => {
          btn.classList.remove('bg-blue-500', 'text-white');
          btn.classList.add('bg-gray-200', 'text-gray-800');
        });

        event.currentTarget.classList.remove('bg-gray-200', 'text-gray-800');
        event.currentTarget.classList.add('bg-blue-500', 'text-white');

        tabs.forEach(tab => {
          if (tab.id === tabId) {
            tab.classList.remove('hidden');
          } else {
            tab.classList.add('hidden');
          }
        });
      }
    </script>

  </body>
