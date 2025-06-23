<div class="min-h-screen bg-gray-100 font-sans text-gray-800">
    <div class="mx-auto max-w-2xl px-4 py-24 pt-60 sm:px-6">
      
        <!-- Box Konfirmasi -->
        @if ($status?->status === 'pending')
            <div class="rounded-3xl bg-yellow-50 p-8 text-center shadow-lg sm:p-10">
            <div class="mb-4 flex justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 8v4l3 3m-6 0a9 9 0 110-18 9 9 0 010 18z" />
              </svg>
            </div>
            <h2 class="mb-2 text-2xl font-bold text-yellow-700 sm:text-3xl">Pendaftaran Sedang Diproses</h2>
            <p class="text-base text-gray-700 sm:text-lg">Mohon tunggu, data kamu sedang kami verifikasi.</p>
            <div class="mt-4 text-sm text-gray-600 richeditor-content">Keterangan: {!! $status?->keterangan !!}</div>
            <div class="mt-6">
              <a href="/"
              class="inline-block rounded-xl bg-yellow-600 px-6 py-2.5 text-white transition duration-200 hover:bg-yellow-700">
              Kembali ke Beranda
              </a>
            </div>
            </div>
            @elseif ($status?->status === 'aprove')
            <div class="rounded-3xl bg-green-50 p-8 text-center shadow-lg sm:p-10">
            <div class="mb-4 flex justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m5 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h2 class="mb-2 text-2xl font-bold text-green-700 sm:text-3xl">Pendaftaran Berhasil</h2>
            <p class="text-base text-gray-700 sm:text-lg">Data kamu telah kami terima dan disetujui. Silahkan Hubungi Kontak Yayasan Untuk Mengkonfirmasi</p>
            <div class="mt-4 text-sm text-gray-600 richeditor-content">Keterangan: {!! $status?->keterangan !!}</div>
            <div class="mt-6">
              <a href="/"
              class="inline-block rounded-xl bg-green-600 px-6 py-2.5 text-white transition duration-200 hover:bg-green-700">
              Kembali ke Beranda
              </a>
            </div>
            </div>
            @elseif ($status?->status === 'rejected')
            <div class="rounded-3xl bg-red-50 p-8 text-center shadow-lg sm:p-10">
            <div class="mb-4 flex justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 18L18 6M6 6l12 12" />
              </svg>
            </div>
            <h2 class="mb-2 text-2xl font-bold text-red-700 sm:text-3xl">Pendaftaran Ditolak</h2>
            <p class="text-base text-gray-700 sm:text-lg">Mohon maaf, data kamu tidak memenuhi persyaratan.</p>
            <div class="mt-4 text-sm text-gray-600 richeditor-content">Keterangan: {!! $status?->keterangan !!}</div>
            <div class="mt-6">
              <a href="/"
              class="inline-block rounded-xl bg-red-600 px-6 py-2.5 text-white transition duration-200 hover:bg-red-700">
              Kembali ke Beranda
              </a>
            </div>
            </div>
          @endif

        {{-- <!-- Modal -->
    <div id="confirmationModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/50">
      <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 text-center animate-fade-in-up">
        <h2 class="text-xl sm:text-2xl font-semibold mb-3">Kamu berhasil terdaftar!</h2>
        <p class="text-gray-600 mb-6 text-sm sm:text-base">Silakan cek email atau hubungi admin jika butuh bantuan lebih lanjut.</p>
        <button onclick="closeModal()"
          class="bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 transition duration-200">Selesai</button>
      </div>
    </div>
  </div> --}}

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

            window.addEventListener('DOMContentLoaded', () => {
                document.getElementById('confirmationModal').classList.remove('hidden');
            });
        </script>
    </div>
