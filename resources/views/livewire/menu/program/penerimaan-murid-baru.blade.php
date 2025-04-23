<body class="bg-gray-50 text-gray-800 font-sans">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 pt-40">
      <div class="bg-white rounded-3xl shadow-xl p-6 sm:p-10 md:p-12">
        <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 mb-8 text-center">Formulir Pendaftaran</h2>

        <!-- Progress Steps -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-10 gap-4">
          <div class="flex items-center gap-2 text-blue-600 font-medium">
            <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm">1</div>
            <span class="text-sm sm:text-base">Formulir</span>
          </div>
          <div class="w-full h-1 bg-gray-300 sm:mx-4 hidden sm:block"></div>
          <div class="flex items-center gap-2 text-gray-400">
            <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full border border-gray-300 text-sm flex items-center justify-center">2</div>
            <span class="text-sm sm:text-base">Lampiran</span>
          </div>
          <div class="w-full h-1 bg-gray-300 sm:mx-4 hidden sm:block"></div>
          <div class="flex items-center gap-2 text-gray-400">
            <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full border border-gray-300 text-sm flex items-center justify-center">3</div>
            <span class="text-sm sm:text-base">Konfirmasi</span>
          </div>
        </div>

        <!-- Form -->
        <form onsubmit="handleNext(event)" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <div>
            <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan nama lengkap">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">No HP</label>
            <input type="tel" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="08xxxxxxxxxx">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Nama Lengkap Wali</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan nama wali">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">No HP Wali</label>
            <input type="tel" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="08xxxxxxxxxx">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Tempat Lahir</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan tempat lahir">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Tanggal Lahir</label>
            <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">NIK</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan NIK">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Nama Sekolah Asal</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan nama sekolah asal">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">NPSN Sekolah Asal</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan NPSN">
          </div>

          <!-- Tombol -->
          <div class="sm:col-span-2 flex flex-col sm:flex-row gap-4 pt-4">
            <button type="button" onclick="showSuccessModal()" class="w-full sm:w-1/2 bg-blue-600 text-white py-2.5 rounded-xl hover:bg-blue-700 transition-all">
              Daftar
            </button>
            <a href="/penerimaan-murid-baru-next" class="w-full sm:w-1/2 bg-gray-100 text-gray-800 text-center py-2.5 rounded-xl hover:bg-gray-200 transition-all">
              Lengkapi Berkas
            </a>
          </div>
        </form>
      </div>
      <!-- Modal -->
      <div id="successModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl p-6 shadow-lg max-w-sm w-full text-center">
          <h2 class="text-xl font-semibold mb-4">Kamu berhasil terdaftar!</h2>
          <button onclick="closeSuccessModal()" class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition">
            Tutup
          </button>
        </div>
      </div>
    </div>

    <script>
      function showSuccessModal() {
        document.getElementById('successModal').classList.remove('hidden');
      }

      function closeSuccessModal() {
        document.getElementById('successModal').classList.add('hidden');
      }

      function handleNext(e) {
        e.preventDefault();
        window.location.href = "/penerimaan-murid-baru-next";
      }
    </script>
  </body>
