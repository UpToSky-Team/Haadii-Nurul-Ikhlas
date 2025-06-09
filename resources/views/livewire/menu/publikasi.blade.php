<body class="bg-gray-100 font-sans text-gray-800">
    <div class="flex-grow px-6 pb-20 pt-32 md:px-20 lg:px-32">

        <!-- Breadcrumb -->
        <nav class="mb-8 flex rounded-lg border border-black/20 bg-white px-5 py-3 text-black shadow-sm"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-2">

                <!-- Item 1: Home -->
                <li class="inline-flex items-center">
                    <a href="/"
                        class="group inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-500">
                        <svg class="mr-2 h-4 w-4 text-gray-700 group-hover:text-green-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>

                <!-- Item 2: Publikasi -->
                <li>
                    <div class="flex items-center">
                        <svg class="mx-2 h-3 w-3 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="/publikasi"
                            class="text-sm font-medium text-gray-700 hover:text-green-500">Publikasi</a>
                    </div>
                </li>

            </ol>
        </nav>

        <!-- Konten -->
        <div class="">

            <!-- Judul -->
            <h1 class="mb-8 text-start text-3xl font-bold text-gray-900 sm:text-4xl">Publikasi</h1>

            <!-- Tabs -->
            <div class="mb-10 flex gap-4">
                <button onclick="showTab(event, 'berita')"
                    class="tab-button rounded-full bg-blue-600 px-5 py-2 text-sm text-white hover:bg-blue-500">Berita</button>
                <button onclick="showTab(event, 'artikel')"
                    class="tab-button rounded-full bg-gray-200 px-5 py-2 text-sm text-gray-700 hover:bg-gray-300">Artikel</button>
                <button onclick="showTab(event, 'dokumentasi')"
                    class="tab-button rounded-full bg-gray-200 px-5 py-2 text-sm text-gray-700 hover:bg-gray-300">Dokumentasi</button>
            </div>

            <!-- Tab Berita -->
            <div id="berita" class="tab-content">
                <h2 class="mb-4 text-xl font-semibold sm:text-2xl">Berita Pilihan</h2>
                @foreach ($berita as $data)
                    <a href="{{ route('berita.detail', $data->id_berita) }}"
                        class="mb-4 flex flex-col rounded-xl bg-white shadow transition-transform duration-300 hover:scale-105 hover:shadow-md sm:flex-row">
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
                <div class="mt-4" onclick="refreshPage()">
                    {{ $berita->links() }}
                </div>
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
                            <p class="text-sm text-gray-500">Oleh: {{ $data->users->name }} |
                                {{ $data->created_at->format('d F Y') }}</p>
                        </div>
                    </a>
                @endforeach
                <div class="mt-4" onclick="refreshPage()">
                    {{ $berita->links() }}
                </div>
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
                <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @if (!empty($video))
                        @foreach ($video as $data)
                            @if ($data->jenis === 'video')
                                <div
                                    class="group relative overflow-hidden rounded-xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                                    <a href="{{ Storage::url($data->galeri_url) }}" data-lightbox="galeri"
                                        class="block">
                                        <div class="relative aspect-video w-full overflow-hidden">
                                            <video controls
                                                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                                title="Video Kegiatan Yayasan" preload="metadata">
                                                <source src="{{ Storage::url($data->galeri_url) }}" type="video/mp4">
                                                Browser Anda tidak mendukung tag video.
                                            </video>
                                        </div>
                                    </a>
                                </div>
                            @endif

                            @if ($data->jenis === 'link')
                                <div
                                    class="group relative overflow-hidden rounded-xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                                    <div class="relative aspect-video w-full overflow-hidden">
                                        <!-- YouTube embed container -->
                                        <div class="absolute inset-0 h-full w-full">
                                            <div
                                                class="h-full w-full [&>iframe]:h-full [&>iframe]:w-full [&>iframe]:border-0 [&>iframe]:object-cover">
                                                {!! $data->galeri_url !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <!-- Script Tabs -->
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

            function refreshPage() {
                setTimeout(function() {
                    location.reload();
                }, 1000);
            }
        </script>
</body>
