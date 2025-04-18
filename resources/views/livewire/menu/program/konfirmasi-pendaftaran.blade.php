<body class="bg-gray-100 text-gray-800 font-sans">

  <div class="container mx-auto px-6 py-20 pt-40">
      <!-- Box Konfirmasi -->
      <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-md text-center">
        <div class="pb-6">
            <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500 sm:text-base">
              <li class="flex md:w-full items-center text-blue-600 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                  <svg class="w-4 h-4 me-2.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                  </svg>
                  Formulir <span class="hidden sm:inline-flex sm:ms-2">Pendaftaran</span>
                </span>
              </li>
              <li class="flex md:w-full items-center text-blue-600 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                  <svg class="w-4 h-4 me-2.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                  </svg>
                  Lampiran
                </span>
              </li>
              <li class="flex md:w-full items-center text-blue-600 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                  <svg class="w-4 h-4 me-2.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                  </svg>
                  Konfirmasi
                </span>
              </li>
            </ol>
          </div>
        <h2 class="text-3xl font-bold mb-4">Pendaftaran Berhasil</h2>
        <p class="text-lg">Terima kasih telah mendaftar. Data kamu telah kami terima dan sedang diproses.</p>
        <div class="mt-6">
            <a href="/" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Kembali ke Beranda</a>
        </div>
    </div>
    <!-- Modal -->
    <div id="confirmationModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white rounded-xl shadow-lg max-w-md w-full p-6 text-center">
            <h2 class="text-xl font-semibold mb-4">Kamu berhasil terdaftar!</h2>
            <p class="text-gray-600 mb-6">Silakan cek email atau hubungi admin jika butuh bantuan.</p>
            <button onclick="closeModal()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Selesai</button>
        </div>
    </div>
  </div>


  <script>
    function closeModal() {
      document.getElementById('confirmationModal').classList.add('hidden');
    }

    // Modal tampil otomatis saat halaman dibuka
    window.addEventListener('DOMContentLoaded', () => {
      document.getElementById('confirmationModal').classList.remove('hidden');
    });
  </script>

</body>
