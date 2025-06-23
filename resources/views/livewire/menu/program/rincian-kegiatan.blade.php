<body class="bg-gray-100 font-sans text-gray-800">
    <div class="flex-grow px-6 pb-20 pt-32 md:px-20 lg:px-32">
        <!-- Breadcrumb -->
        <nav class="animate-fade-in mb-6 flex rounded-md border border-gray-200 bg-white px-4 py-2 shadow-sm"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 text-sm text-gray-500 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="group inline-flex items-center font-medium text-gray-600 transition-all duration-200 hover:text-green-600">
                        <svg class="me-2 h-4 w-4 text-gray-400 transition group-hover:text-green-600" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="mx-1 h-3 w-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 6 10">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#"
                            class="ms-1 font-medium text-gray-600 transition-all duration-200 hover:text-green-600 md:ms-2">Program</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="mx-1 h-3 w-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 6 10">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 font-medium text-gray-800 md:ms-2">Rincian Kegiatan</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="mb-8 text-start text-3xl font-bold">Rincian Kegiatan Yayasan</h1>

        <!-- Daftar kegiatan -->
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
            <!-- Card kegiatan -->
            @foreach ($kegiatan as $data)
                @php $desc = str_replace("'", '', $data->deskripsi) ; @endphp
                <div onclick="bukaModal('{{ $data->judul_kegiatan }}', '{{ $data->created_at }}', '{!! $desc !!}')"
                    class="animate-fade-up transform cursor-pointer overflow-hidden rounded-2xl bg-white shadow-md transition duration-300 hover:shadow-xl">
                    <div class="w-full h-48 flex justify-center">
                        <img src="{{ Storage::url($data->gambar) }}" alt="Gambar Kegiatan"
                            class="h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h2 class="mb-2 text-xl font-semibold">{{ $data->judul_kegiatan }}</h2>
                        <p class="mb-2 text-sm text-gray-500">Tanggal: {{ $data->created_at->format('d F Y') }}</p>
                        <div class="mb-4 text-sm text-gray-700 richeditor-content">
                            {!! Str::words(str_replace("'", '', $data->deskripsi), 25, '...') !!}
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- End card -->
            <div id="modal-kegiatan"
                class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50">
                <div class="w-11/12 max-w-lg rounded-2xl bg-white p-6 shadow-lg">
                    <h2 id="modal-judul" class="mb-2 text-2xl font-bold">Judul Kegiatan</h2>
                    <p id="modal-tanggal" class="mb-2 text-sm text-gray-500">Tanggal Kegiatan</p>
                    <div id="modal-deskripsi" class="mb-4 text-sm text-gray-700 richeditor-content">Deskripsi kegiatan lebih lengkap akan
                        muncul di sini.</div>
                    <div class="text-right">
                        <button onclick="tutupModal()"
                            class="rounded bg-green-600 px-4 py-2 text-white transition hover:bg-green-700">Tutup</button>
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
                document.getElementById('modal-tanggal').textContent = 'Tanggal Mulai: ' + new Date(tanggal).toLocaleDateString(
                    'id-ID', {
                        day: '2-digit',
                        month: 'long',
                        year: 'numeric'
                    });
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
