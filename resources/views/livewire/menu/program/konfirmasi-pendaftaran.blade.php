<body class="bg-gray-100 text-gray-800 font-sans">

  <div class="container mx-auto px-6 py-20 pt-40">
      <!-- Box Konfirmasi -->
      <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-md text-center">
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
