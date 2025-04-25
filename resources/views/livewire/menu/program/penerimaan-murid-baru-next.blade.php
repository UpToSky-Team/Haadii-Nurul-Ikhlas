<body class="bg-gray-100 text-gray-800 font-sans">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
    <div class="bg-white rounded-3xl shadow-xl p-6 sm:p-10">

      <h2 class="text-2xl sm:text-3xl font-semibold mb-8 text-center">Lampiran (Wajib)</h2>

      <!-- Stepper -->
      <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-10">
        <div class="flex items-center gap-2 text-blue-600 font-medium">
          <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm">1</div>
          <span class="text-sm sm:text-base">Formulir</span>
        </div>
        <div class="w-full h-1 bg-gray-300 sm:mx-4 hidden sm:block"></div>
        <div class="flex items-center gap-2 text-blue-600 font-medium">
          <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm">2</div>
          <span class="text-sm sm:text-base">Lampiran</span>
        </div>
        <div class="w-full h-1 bg-gray-300 sm:mx-4 hidden sm:block"></div>
        <div class="flex items-center gap-2 text-gray-400">
          <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full border border-gray-300 flex items-center justify-center text-sm">3</div>
          <span class="text-sm sm:text-base">Konfirmasi</span>
        </div>
      </div>

      <!-- Form Upload -->
      <form class="space-y-6">
        <div>
          <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
          <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan nama lengkap">
        </div>

        <div>
          <label class="block text-sm font-medium mb-1">NIK</label>
          <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan NIK">
        </div>

        <!-- Tombol Cek Data -->
        <div class="py-2">
          <button type="button" id="btn-cek-data" class="block w-full bg-blue-600 text-white text-center py-2.5 rounded-xl hover:bg-blue-700 transition-all duration-200">
            Cek Data
          </button>
        </div>

        <!-- Form Lampiran (disembunyikan dulu) -->
        <div id="form-lampiran" hidden>
          <div>
            <label class="block text-sm font-medium mb-1">Foto Siswa</label>
            <input type="file" accept="image/*" class="w-full px-4 py-2 border border-gray-300 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Akta Lahir</label>
            <input type="file" accept=".pdf,image/*" class="w-full px-4 py-2 border border-gray-300 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Kartu Keluarga</label>
            <input type="file" accept=".pdf,image/*" class="w-full px-4 py-2 border border-gray-300 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Ijazah / Surat Keterangan Sekolah</label>
            <input type="file" accept=".pdf,image/*" class="w-full px-4 py-2 border border-gray-300 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>

          <div class="pt-6">
            <a href="/konfirmasi-pendaftaran" class="block w-full bg-blue-600 text-white text-center py-2.5 rounded-xl hover:bg-blue-700 transition-all duration-200">
              Lengkapi Berkas
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Script untuk menampilkan form lampiran -->
  <script>
    document.getElementById('btn-cek-data').addEventListener('click', function () {
      const lampiranForm = document.getElementById('form-lampiran');
      lampiranForm.hidden = false;
      lampiranForm.scrollIntoView({ behavior: 'smooth' });
    });
  </script>
</body>
