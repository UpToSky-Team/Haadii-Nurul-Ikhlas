<div class="bg-gray-100 text-gray-800 font-sans min-h-screen">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 py-24 pt-60">
<div class="bg-gray-100 text-gray-800 font-sans min-h-screen">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 py-24 pt-60">
      <!-- Box Konfirmasi -->
      <div class="bg-white rounded-3xl shadow-xl p-8 sm:p-10 text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4m5 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h2 class="text-2xl sm:text-3xl font-semibold mb-2">Pendaftaran Berhasil</h2>
        <p class="text-base sm:text-lg text-gray-600">Terima kasih telah mendaftar. Data kamu telah kami terima dan sedang diproses.</p>
      <div class="bg-white rounded-3xl shadow-xl p-8 sm:p-10 text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4m5 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h2 class="text-2xl sm:text-3xl font-semibold mb-2">Pendaftaran Berhasil</h2>
        <p class="text-base sm:text-lg text-gray-600">Terima kasih telah mendaftar. Data kamu telah kami terima dan sedang diproses.</p>
        <div class="mt-6">
          <a href="/" class="inline-block bg-blue-600 text-white px-6 py-2.5 rounded-xl hover:bg-blue-700 transition duration-200">
            Kembali ke Beranda
          </a>
          <a href="/" class="inline-block bg-blue-600 text-white px-6 py-2.5 rounded-xl hover:bg-blue-700 transition duration-200">
            Kembali ke Beranda
          </a>
        </div>
      </div>

      <!-- Modal -->
      <div id="confirmationModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/50">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 text-center animate-fade-in-up">
          <h2 class="text-xl sm:text-2xl font-semibold mb-3">Kamu berhasil terdaftar!</h2>
          <p class="text-gray-600 mb-6 text-sm sm:text-base">Silakan cek email atau hubungi admin jika butuh bantuan lebih lanjut.</p>
          <button onclick="closeModal()"
        class="bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 transition duration-200">Selesai</button>
        </div>
      </div>
    </div>
      </div>
    </div>

    <style>
      @keyframes fade-in-up {
        0% {
          opacity: 0;
          transform: translateY(20px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .animate-fade-in-up {
        animation: fade-in-up 0.4s ease-out;
      }
    </style>
    <style>
      @keyframes fade-in-up {
        0% {
          opacity: 0;
          transform: translateY(20px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .animate-fade-in-up {
        animation: fade-in-up 0.4s ease-out;
      }
    </style>

    <script>
      function closeModal() {
        document.getElementById('confirmationModal').classList.add('hidden');
      }
    <script>
      function closeModal() {
        document.getElementById('confirmationModal').classList.add('hidden');
      }

      window.addEventListener('DOMContentLoaded', () => {
        document.getElementById('confirmationModal').classList.remove('hidden');
      });
    </script>
  </div>
      window.addEventListener('DOMContentLoaded', () => {
        document.getElementById('confirmationModal').classList.remove('hidden');
      });
    </script>
  </div>
