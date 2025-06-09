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
                                <div class="group relative">
                                    <img src="{{ Storage::url($data->galeri_url) }}" alt="{{ $data->galeri_url }}"
                                        class="rounded-lg shadow transition-transform duration-300 hover:scale-105">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity group-hover:opacity-100">
                                        <p class="px-2 text-center text-sm text-white">{{ $data->caption }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
                <div class="mt-10 columns-1 gap-6 space-y-6 sm:columns-2 lg:columns-3 xl:columns-3">
                    @if (!empty($video))
                        @foreach ($video as $data)
                            @if ($data->jenis === 'video')
                                <div class="group relative mb-6 break-inside-avoid overflow-hidden rounded-xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                                    data-embed-type="link">
                                    <a href="{{ Storage::url($data->galeri_url) }}" data-lightbox="galeri"
                                        class="block">
                                        <div class="relative w-full overflow-hidden">
                                            <div class="group relative">
                                                <video controls
                                                    class="h-auto w-full rounded-t-xl bg-black object-contain transition-transform duration-300 group-hover:scale-105"
                                                    title="Video Kegiatan Yayasan" preload="metadata">
                                                    <source src="{{ Storage::url($data->galeri_url) }}"
                                                        type="video/mp4">
                                                    Browser Anda tidak mendukung tag video.
                                                </video>
                                                @if ($data->caption)
                                                    <div
                                                        class="absolute inset-0 flex items-center justify-center rounded-t-xl bg-black bg-opacity-50 opacity-0 transition-opacity group-hover:opacity-100">
                                                        <p
                                                            class="mx-4 max-w-xs rounded-lg bg-black bg-opacity-70 px-4 py-2 text-center text-sm text-white">
                                                            {{ $data->caption }}
                                                        </p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif

                            @if ($data->jenis === 'link')
                                <div
                                    class="group relative mb-6 break-inside-avoid overflow-hidden rounded-xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                                    <div class="relative w-full overflow-hidden rounded-t-xl">
                                        <!-- Container untuk embed dengan aspect ratio yang fleksibel -->
                                        <div class="relative w-full rounded-t-xl bg-white">
                                            <div
                                                class="[&>iframe]:block [&>iframe]:min-h-48 [&>iframe]:w-full [&>iframe]:rounded-t-xl [&>iframe]:border-0">
                                                {!! $data->galeri_url !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>

                {{-- JavaScript untuk menyesuaikan iframe height --}}
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Function untuk menyesuaikan iframe height
                        function adjustIframeHeight() {
                            const iframes = document.querySelectorAll('iframe');

                            iframes.forEach(iframe => {
                                // Cek apakah iframe sudah ter-load
                                iframe.onload = function() {
                                    try {
                                        // Deteksi platform berdasarkan src
                                        const src = iframe.src.toLowerCase();

                                        if (src.includes('youtube.com') || src.includes('youtu.be')) {
                                            // YouTube - deteksi shorts vs regular
                                            if (src.includes('shorts')) {
                                                iframe.style.height = '600px'; // Portrait untuk shorts
                                                iframe.style.aspectRatio = '9/16';
                                            } else {
                                                iframe.style.height = '315px'; // Landscape untuk video biasa
                                                iframe.style.aspectRatio = '16/9';
                                            }
                                        } else if (src.includes('tiktok.com')) {
                                            // TikTok - selalu portrait
                                            iframe.style.height = '800px';
                                            iframe.style.aspectRatio = '9/16';
                                        } else if (src.includes('instagram.com')) {
                                            // Instagram - bisa square atau portrait
                                            iframe.style.height = '800px';
                                            iframe.style.aspectRatio = '9/16';
                                        } else {
                                            // Default untuk platform lain
                                            iframe.style.height = '315px';
                                            iframe.style.aspectRatio = '16/9';
                                        }
                                    } catch (e) {
                                        // Fallback jika tidak bisa detect
                                        iframe.style.height = '315px';
                                    }
                                };

                                // Trigger onload jika iframe sudah loaded
                                if (iframe.complete) {
                                    iframe.onload();
                                }
                            });
                        }

                        // Jalankan saat DOM ready
                        adjustIframeHeight();

                        // Jalankan ulang setiap 2 detik untuk iframe yang ter-load belakangan
                        setTimeout(adjustIframeHeight, 2000);
                    });
                </script>
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
