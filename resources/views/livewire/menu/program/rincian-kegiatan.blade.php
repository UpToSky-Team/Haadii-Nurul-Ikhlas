<body class="bg-gray-100 font-sans text-gray-800">
    <div class="flex-grow pb-20 px-6 md:px-20 lg:px-32 pt-32">
      <!-- Breadcrumb -->
      <nav class="flex px-4 py-2 rounded-md bg-white shadow-sm border border-gray-200 mb-6 animate-fade-in" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse text-sm text-gray-500">
          <li class="inline-flex items-center">
            <a href="/" class="group inline-flex items-center font-medium text-gray-600 hover:text-green-600 transition-all duration-200">
              <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-green-600 transition" fill="currentColor"
                   viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
              Home
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-3 h-3 mx-1 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 6 10">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
              </svg>
              <a href="#" class="ms-1 font-medium text-gray-600 hover:text-green-600 md:ms-2 transition-all duration-200">Program</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="w-3 h-3 mx-1 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 6 10">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
              </svg>
              <span class="ms-1 font-medium text-gray-800 md:ms-2">Rincian Kegiatan</span>
            </div>
          </li>
        </ol>
      </nav>

      <h1 class="text-3xl font-bold mb-8 text-start">Rincian Kegiatan Yayasan</h1>

      <!-- Daftar kegiatan -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
        <!-- Card kegiatan -->
        @foreach ($kegiatan as $data)
        @php $desc = str_replace("'", '', $data->deskripsi) ; @endphp
        <div onclick="bukaModal('{{$data->judul_kegiatan}}', '{{$data->created_at}}', '{!! $desc !!}')"
            class="cursor-pointer bg-white rounded-2xl shadow-md overflow-hidden transform transition duration-300 hover:shadow-xl animate-fade-up">
          <img src="{{Storage::url($data->gambar)}}" alt="Gambar Kegiatan" class="w-full h-48 object-cover">
          <div class="p-6">
            <h2 class="text-xl font-semibold mb-2">{{$data->judul_kegiatan}}</h2>
            <p class="text-sm text-gray-500 mb-2">Tanggal: {{ $data->created_at->format('d F Y') }}</p>
            <p class="text-gray-700 text-sm mb-4">
              {!! Str::words(str_replace("'", '', $data->deskripsi), 25, '...') !!}
            </p>
          </div>
        </div>
        @endforeach
        <!-- End card -->
        <div id="modal-kegiatan" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50">
          <div class="bg-white rounded-2xl shadow-lg w-11/12 max-w-lg p-6">
            <h2 id="modal-judul" class="text-2xl font-bold mb-2">Judul Kegiatan</h2>
            <p id="modal-tanggal" class="text-sm text-gray-500 mb-2">Tanggal Kegiatan</p>
            <div id="modal-deskripsi" class="text-gray-700 text-sm mb-4">Deskripsi kegiatan lebih lengkap akan muncul di sini.</div>
            <div class="text-right">
              <button onclick="tutupModal()" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">Tutup</button>
            </div>
          </div>
        </div>
      </div>

    <!-- Tambahkan style animasi -->
    <style>
      @keyframes fade-up {
        from {
          opacity: 0;
          transform: translateY(30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .animate-fade-up {
        animation: fade-up 0.5s ease-out;
      }

      @keyframes fade-in {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      .animate-fade-in {
        animation: fade-in 0.6s ease-in;
      }
    </style>

    <script>
    function bukaModal(judul, tanggal, deskripsi) {
      document.getElementById('modal-judul').textContent = judul;
      document.getElementById('modal-tanggal').textContent = 'Tanggal Mulai: ' + new Date(tanggal).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' });
      document.getElementById('modal-deskripsi').innerHTML = deskripsi;
      document.getElementById('modal-kegiatan').classList.remove('hidden');
      document.getElementById('modal-kegiatan').classList.add('flex');
    }

    function tutupModal() {
      document.getElementById('modal-kegiatan').classList.add('hidden');
      document.getElementById('modal-kegiatan').classList.remove('flex');
    }
  </script>
    </div>
</body>
