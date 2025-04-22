<body class="bg-gray-100 font-sans text-gray-800">
    <div class="flex-grow pb-20 px-6 md:px-20 lg:px-32 pt-32">

      <!-- Breadcrumb -->
      <nav class="flex px-5 py-3 border border-black/20 rounded-lg bg-white text-black shadow-sm mb-8" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-2">

          <!-- Item 1: Home -->
          <li class="inline-flex items-center">
            <a href="/" class="group inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-500">
              <svg class="w-4 h-4 mr-2 text-gray-700 group-hover:text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
              </svg>
              Home
            </a>
          </li>

          <!-- Item 2: Publikasi -->
          <li>
            <div class="flex items-center">
              <svg class="w-3 h-3 mx-2 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
              </svg>
              <a href="/publikasi" class="text-sm font-medium text-gray-700 hover:text-green-500">Publikasi</a>
            </div>
          </li>

        </ol>
      </nav>

      <!-- Konten -->
      <div class="">

        <!-- Judul -->
        <h1 class="text-3xl sm:text-4xl font-bold mb-8 text-start text-gray-900">Publikasi</h1>

        <!-- Tabs -->
        <div class="flex gap-4 mb-10">
          <button onclick="showTab(event, 'berita')" class="tab-button bg-blue-600 text-white px-5 py-2 rounded-full text-sm hover:bg-blue-500">Berita</button>
          <button onclick="showTab(event, 'artikel')" class="tab-button bg-gray-200 text-gray-700 px-5 py-2 rounded-full text-sm hover:bg-gray-300">Artikel</button>
          <button onclick="showTab(event, 'dokumentasi')" class="tab-button bg-gray-200 text-gray-700 px-5 py-2 rounded-full text-sm hover:bg-gray-300">Dokumentasi</button>
        </div>

        <!-- Tab Berita -->
        <div id="berita" class="tab-content">
          <h2 class="text-xl sm:text-2xl font-semibold mb-4">Berita Pilihan</h2>
          <a href="/detail-berita" class="block bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105">
            <h3 class="font-semibold text-lg text-gray-800 mb-2">Peluncuran Program Pendidikan Digital</h3>
            <p class="text-gray-600 mb-2">Pemerintah meluncurkan program digitalisasi sekolah...</p>
            <p class="text-sm text-gray-500">Tanggal: 5 April 2025</p>
          </a>
        </div>

        <!-- Tab Artikel -->
        <div id="artikel" class="tab-content hidden">
          <h2 class="text-xl sm:text-2xl font-semibold mb-4">Artikel Pilihan</h2>
          <a href="/detail-artikel" class="block bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105">
            <h3 class="font-semibold text-lg text-gray-800 mb-2">Pentingnya Literasi Digital</h3>
            <p class="text-gray-600 mb-2">Artikel ini membahas pentingnya literasi digital bagi generasi muda...</p>
            <p class="text-sm text-gray-500">Oleh: Rina Dewi | 2 April 2025</p>
          </a>
        </div>

        <!-- Tab Dokumentasi -->
        <div id="dokumentasi" class="tab-content hidden">
            <h2 class="text-2xl sm:text-3xl font-semibold text-gray-900 mb-6">Galeri Dokumentasi</h2>

            <!-- Video Section -->
            <div class="mb-10">
            <h3 class="text-xl font-semibold text-gray-800 mb-5">Video Dokumentasi</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <iframe class="w-full h-64" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Video 2 -->
                <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <iframe class="w-full h-64" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Video 3 -->
                <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <iframe class="w-full h-64" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            </div>

            <!-- Image Gallery Section -->
            <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-5">Galeri Gambar</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <a href="/img/fotoketiga.png" data-lightbox="galeri" class="group rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <img src="/img/fotoketiga.png" alt="Dokumentasi 1" class="w-full h-56 object-cover rounded-lg">
                </a>
                <a href="/img/fotoketiga.png" data-lightbox="galeri" class="group rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <img src="/img/fotoketiga.png" alt="Dokumentasi 2" class="w-full h-56 object-cover rounded-lg">
                </a>
                <a href="/img/fotoketiga.png" data-lightbox="galeri" class="group rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <img src="/img/fotoketiga.png" alt="Dokumentasi 3" class="w-full h-56 object-cover rounded-lg">
                </a>
                <a href="/img/fotoketiga.png" data-lightbox="galeri" class="group rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <img src="/img/fotoketiga.png" alt="Dokumentasi 4" class="w-full h-56 object-cover rounded-lg">
                </a>
                <a href="/img/fotoketiga.png" data-lightbox="galeri" class="group rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <img src="/img/fotoketiga.png" alt="Dokumentasi 5" class="w-full h-56 object-cover rounded-lg">
                </a>
                <a href="/img/fotoketiga.png" data-lightbox="galeri" class="group rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <img src="/img/fotoketiga.png" alt="Dokumentasi 6" class="w-full h-56 object-cover rounded-lg">
                </a>
            </div>
            </div>
        </div>



      </div>
    </div>

    <!-- Script Tabs -->
    <script>
      function showTab(event, tabId) {
        const tabs = document.querySelectorAll('.tab-content');
        const buttons = document.querySelectorAll('.tab-button');

        buttons.forEach(btn => {
          btn.classList.remove('bg-blue-600', 'text-white');
          btn.classList.add('bg-gray-200', 'text-gray-700');
        });

        event.currentTarget.classList.remove('bg-gray-200', 'text-gray-700');
        event.currentTarget.classList.add('bg-blue-600', 'text-white');

        tabs.forEach(tab => {
          tab.classList.toggle('hidden', tab.id !== tabId);
        });
      }
    </script>
  </body>
