<body class="bg-gray-100 font-sans text-gray-800">

    <div class="mx-auto max-w-6xl px-6 py-10 pt-[120px] sm:px-6 lg:px-8">
        <!-- Judul -->
        <h1 class="mb-8 text-center text-3xl font-bold sm:text-4xl">Publikasi</h1>

        <!-- Tabs -->
        <div class="mb-10 flex flex-wrap justify-center gap-2">
            <button onclick="showTab(event, 'berita')"
                class="tab-button rounded-lg bg-blue-500 px-4 py-2 text-sm text-white sm:text-base">Berita</button>
            <button onclick="showTab(event, 'artikel')"
                class="tab-button rounded-lg bg-gray-200 px-4 py-2 text-sm text-gray-800 sm:text-base">Artikel</button>
            <button onclick="showTab(event, 'dokumentasi')"
                class="tab-button rounded-lg bg-gray-200 px-4 py-2 text-sm text-gray-800 sm:text-base">Dokumentasi</button>
        </div>

        <!-- Tab Berita -->
        <div id="berita" class="tab-content">
            <h2 class="mb-4 text-xl font-semibold sm:text-2xl">Berita Pilihan</h2>
            @foreach ($berita as $data)
                <a href="{{ route('berita.detail', $data->id_berita) }}"
                    class="flex flex-col rounded-xl bg-white shadow transition-transform duration-300 hover:scale-105 hover:shadow-md sm:flex-row">
                    <div class="flex-shrink-0">
                        <img src="{{ Storage::url($data->slug) }}" alt="{{ $data->slug }}"
                            class="h-full w-full rounded-t-xl object-cover sm:h-full sm:w-80 sm:rounded-l-xl sm:rounded-t-none">
                    </div>
                    <div class="p-4 sm:m-5 sm:ml-4">
                        <h3 class="mb-1 text-lg font-semibold">{{ $data->judul }}</h3>
                        <div class="mb-1 text-gray-600">{!! Str::words($data->content, 25, '...') !!}</div>
                        <p class="text-sm text-gray-500">Tanggal: {{ $data->created_at->format('d F Y') }}</p>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Tab Artikel -->
        <div id="artikel" class="tab-content hidden">
            <h2 class="mb-4 text-xl font-semibold sm:text-2xl">Berita Pilihan</h2>
            @foreach ($artikel as $data)
                <a href="{{ route('artikel.detail', $data->id_artikel) }}"
                    class="flex flex-col rounded-xl bg-white shadow transition-transform duration-300 hover:scale-105 hover:shadow-md sm:flex-row">
                    <div class="flex-shrink-0">
                        <img src="{{ Storage::url($data->slug) }}" alt="{{ $data->slug }}"
                            class="h-full w-full rounded-t-xl object-cover sm:h-full sm:w-80 sm:rounded-l-xl sm:rounded-t-none">
                    </div>
                    <div class="p-4 sm:m-5 sm:ml-4">
                        <h3 class="mb-1 text-lg font-semibold">{{ $data->judul }}</h3>
                        <div class="mb-1 text-gray-600">{!! Str::words($data->content, 25, '...') !!}</div>
                        <p class="text-sm text-gray-500">Oleh: {{$data->users->name}} | {{ $data->created_at->format('d F Y') }}</p>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Tab Dokumentasi -->
        <div id="dokumentasi" class="tab-content hidden">
            <h2 class="mb-4 text-xl font-semibold sm:text-2xl">Galeri Dokumentasi</h2>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4">
                @if (!empty($foto))
                    @foreach ($foto as $data)
                        <a href="{{ Storage::url($data->galeri_url) }}" data-lightbox="galeri">
                            <img src="{{ Storage::url($data->galeri_url) }}" alt="{{ $data->galeri_url }}"
                                class="rounded-lg shadow transition-transform duration-300 hover:scale-105">
                        </a>
                    @endforeach
                @endif
            </div>
            <div class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4">
                @if (!empty($video))
                    @foreach ($video as $data)
                        <a href="{{ Storage::url($data->galeri_url) }}" data-lightbox="galeri">
                            <div class="relative overflow-hidden rounded-lg shadow-md">
                              <iframe class="h-64 w-full md:h-96"
                                src="{{ Storage::url($data->galeri_url) }}" title="Video Kegiatan Yayasan"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                              </iframe>
                              <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-50"></div>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <script>
        function showTab(event, tabId) {
            const tabs = document.querySelectorAll('.tab-content');
            const buttons = document.querySelectorAll('.tab-button');

            buttons.forEach(btn => {
                btn.classList.remove('bg-blue-500', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-800');
            });

            event.currentTarget.classList.remove('bg-gray-200', 'text-gray-800');
            event.currentTarget.classList.add('bg-blue-500', 'text-white');

            tabs.forEach(tab => {
                if (tab.id === tabId) {
                    tab.classList.remove('hidden');
                } else {
                    tab.classList.add('hidden');
                }
            });
        }
    </script>

</body>
