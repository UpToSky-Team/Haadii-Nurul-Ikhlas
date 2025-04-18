<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="container mx-auto px-6 py-12 pt-40">
      <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-6">
        <h2 class="text-2xl font-bold mb-6">Formulir Pendaftaran</h2>
        <div class="pb-4">
            <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
                <li class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                    <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                        <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        Formulir<span class="hidden sm:inline-flex sm:ms-2">Pendaftaran</span>
                    </span>
                </li>
                <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                    <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                        <span class="me-2">2</span>
                        File<span class="hidden sm:inline-flex sm:ms-2">Wajib</span>
                    </span>
                </li>
                <li class="flex items-center">
                    <span class="me-2">3</span>
                    Konfirmasi
                </li>
            </ol>
        </div>
        <form onsubmit="handleNext(event)" class="space-y-4">
          <div>
            <label class="block font-semibold mb-1">Nama Lengkap</label>
            <input type="text" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama lengkap">
          </div>

          <div>
            <label class="block font-semibold mb-1">No HP</label>
            <input type="tel" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="08xxxxxxxxxx">
          </div>

          <div>
            <label class="block font-semibold mb-1">Nama Lengkap Wali</label>
            <input type="text" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama wali">
          </div>

          <div>
            <label class="block font-semibold mb-1">No HP Wali</label>
            <input type="tel" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="08xxxxxxxxxx">
          </div>

          <div>
            <label class="block font-semibold mb-1">Tempat Lahir</label>
            <input type="text" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan tempat lahir">
          </div>

          <div>
            <label class="block font-semibold mb-1">Tanggal Lahir</label>
            <input type="date" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <div>
            <label class="block font-semibold mb-1">NIK</label>
            <input type="text" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan NIK">
          </div>

          <div>
            <label class="block font-semibold mb-1">Nama Sekolah Asal</label>
            <input type="text" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama sekolah asal">
          </div>

          <div>
            <label class="block font-semibold mb-1">NPSN Sekolah Asal</label>
            <input type="text" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan NPSN">
          </div>

        <!-- Tombol Daftar & Lengkapi Berkas -->
        <div class="pt-4 flex flex-col sm:flex-row gap-4">
            <button type="button" onclick="showSuccessModal()" class="w-full sm:w-1/2 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Daftar
            </button>
            <a href="/penerimaan-murid-baru-next" class="w-full sm:w-1/2 bg-gray-200 text-gray-800 text-center py-2 rounded-lg hover:bg-gray-300 transition">
            Lengkapi Berkas
            </a>
        </div>

        <!-- Modal Pop-Up -->
        <div id="successModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg p-6 shadow-lg text-center max-w-sm w-full">
            <h2 class="text-xl font-semibold mb-4">Kamu berhasil terdaftar!</h2>
            <button onclick="closeSuccessModal()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Tutup</button>
            </div>
        </div>

        </form>

        <script>
            function showSuccessModal() {
              document.getElementById('successModal').classList.remove('hidden');
            }

            function closeSuccessModal() {
              document.getElementById('successModal').classList.add('hidden');
            }
          </script>
{{--
        <script>
          function handleNext(e) {
            e.preventDefault();
            window.location.href = "/penerimaan-murid-baru-next";
          }
        </script> --}}
      </div>
    </div>
  </body>
