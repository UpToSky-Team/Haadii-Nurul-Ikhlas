<main class="font-display">
    <section
        class="relative flex min-h-[500px] w-full flex-col items-center justify-center gap-10 overflow-hidden rounded-bl-none bg-cover bg-center p-6 pt-[80px] text-white sm:min-h-[600px] sm:flex-row sm:gap-20 sm:p-10 sm:pt-[100px] lg:min-h-[700px] lg:gap-64"
        style="background-image: url('/img/bg-jumbotron-update.png');">


        <div
            class="mx-auto flex w-full max-w-screen-lg flex-col items-center justify-between gap-8 rounded-br-[20px] rounded-tl-[20px] border border-white/30 bg-white/10 px-6 py-8 shadow-lg backdrop-blur-md sm:flex-row sm:gap-12 sm:px-12 sm:pt-20">

            <!-- Teks -->
            <div class="relative z-10 flex-1 text-center sm:text-left">
                <p class="mb-2 text-2xl font-bold leading-tight text-white drop-shadow-sm sm:text-3xl">
                    SELAMAT DATANG DI YAYASAN
                </p>
                <h3 class="mb-4 text-xl font-bold text-white sm:text-2xl">
                    HAADII NURUL IKHLAS
                </h3>
                <div class="mb-6 text-sm leading-relaxed text-white sm:text-base">
                    {!! $yayasan->isNotEmpty() && $yayasan->first()->deskripsi
                        ? Str::before($yayasan->first()->deskripsi, '.').'.'
                        : 'Yayasan Haadii Nurul Ikhlas' !!}
                </div>

                <!-- Sosial Media & CTA -->
                <div class="flex flex-wrap items-center justify-center gap-3 sm:justify-start sm:gap-4">
                    @if ($yayasan->isNotEmpty() && $yayasan->first()->instagram)
                        <a href="{{ $yayasan->first()->instagram }}"
                            class="rounded-full bg-pink-600 p-2 shadow-md transition-transform hover:scale-110">
                            <img src="/img/icon/instagram.png" alt="Instagram" class="h-6 w-6">
                        </a>
                    @endif
                    @if ($yayasan->isNotEmpty() && $yayasan->first()->tiktok)
                        <a href="{{ $yayasan->first()->tiktok }}"
                            class="rounded-full bg-black p-2 shadow-md transition-transform hover:scale-110">
                            <img src="/img/icon/tiktok.png" alt="TikTok" class="h-6 w-6">
                        </a>
                    @endif
                    @if ($yayasan->isNotEmpty() && $yayasan->first()->youtube)
                        <a href="{{ $yayasan->first()->youtube }}"
                            class="rounded-full bg-red-600 p-2 shadow-md transition-transform hover:scale-110">
                            <img src="/img/icon/youtube.png" alt="YouTube" class="h-6 w-6">
                        </a>
                    @endif
                    @if ($yayasan->isNotEmpty() && $yayasan->first()->twitter)
                        <a href="{{ $yayasan->first()->twitter }}"
                            class="rounded-full bg-white p-2 shadow-md transition-transform hover:scale-110">
                            <img src="/img/icon/twitter.png" alt="twitter" class="h-6 w-6">
                        </a>
                    @endif
                    @if ($yayasan->isNotEmpty() && $yayasan->first()->facebook)
                        <a href="{{ $yayasan->first()->facebook }}"
                            class="rounded-full bg-blue-600 p-2 shadow-md transition-transform hover:scale-110">
                            <img src="/img/icon/facebook.png" alt="facebook" class="h-6 w-6">
                        </a>
                    @endif
                    @if ($yayasan->isNotEmpty() && $yayasan->first()->no_telepon)
                        <a href="https://wa.me/{{ $yayasan->first()->no_telepon }}"
                            class="rounded-lg bg-white px-4 py-2 font-semibold text-black shadow-md transition-transform hover:scale-105 hover:bg-gray-200 sm:px-6">
                            Hubungi Kami
                        </a>
                    @endif
                </div>
            </div>

            <!-- Logo Yayasan (Hilang di Mobile) -->
            <div class="hidden sm:flex">
                <div
                    class="relative z-10 flex h-44 w-44 items-center justify-center transition-transform duration-300 hover:scale-105 sm:h-60 sm:w-60">
                    <div class="absolute h-full w-full rounded-full bg-white shadow-md"></div>
                    <img src="/img/logoyayasan.png" alt="Logo Yayasan" class="relative h-[85%] w-[85%] object-contain">
                </div>
            </div>
        </div>

    </section>

    <section>
        <div id="{{ $jumlahBanner == 1 ? '' : 'default-carousel' }}" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative aspect-[16/6] overflow-hidden sm:aspect-[16/9] md:aspect-[16/6] lg:aspect-[16/5]">
                <!-- Item 1 -->
                @if ($jumlahBanner == 1)
                    <a href="{{ Storage::url($bannerOne->banner) }}" target="_blank" rel="noopener">
                        <div class="">
                            <img src="{{ Storage::url($bannerOne->banner) }}" class="block h-full w-full object-cover"
                                alt="...">
                        </div>
                    </a>
                @else
                    @foreach ($banner as $data)
                        <a href="{{ Storage::url($data->banner) }}" target="_blank" rel="noopener">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ Storage::url($data->banner) }}" class="block h-full w-full object-cover"
                                    alt="...">
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>

            @if ($jumlahBanner != 1)
                <!-- Slider indicators -->
                <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="h-3 w-3 rounded-full bg-white/70 hover:bg-white" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="h-3 w-3 rounded-full bg-white/70 hover:bg-white" aria-current="false"
                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="h-3 w-3 rounded-full bg-white/70 hover:bg-white" aria-current="false"
                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>

                <!-- Slider controls -->
                <button type="button"
                    class="group absolute start-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                        <svg class="h-4 w-4 text-white rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="group absolute end-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                        <svg class="h-4 w-4 text-white rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            @endif
        </div>
    </section>

    {{-- Section Program Unggulan --}}
    <section class="bg-white py-16">
        <div class="mx-auto max-w-6xl px-4 text-center">
            <h2 class="mb-10 text-3xl font-bold text-[#3B9B3C] sm:text-4xl">
                KEGIATAN <span class="text-[#FDC261]">YAYASAN HAADII NURUL IKHLAS</span>
            </h2>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
                @php $count = 1; @endphp
                @foreach ($kegiatanUnggulan as $data)
                    <!-- Card -->
                    <div
                        class="transform rounded-2xl border border-[#FDC261] bg-[#FDC261]/20 p-6 shadow-lg transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
                        <div
                            class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-[#FDC261] text-2xl font-bold text-white shadow-md">
                            {{ $count }}
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-[#3B9B3C]">{{ $data->judul_kegiatan }}</h3>
                        <div class="text-sm text-gray-600">
                            {{ Str::words(strip_tags($data->deskripsi), 20) }}
                        </div>
                    </div>
                    @php $count++; @endphp
                @endforeach
            </div>
        </div>
    </section>


    {{-- Section Berita --}}
    <section
        class="relative min-h-[300px] rounded-b-none rounded-bl-none rounded-br-none rounded-tr-none bg-[#3B9B3C] py-12 text-white sm:min-h-[500px] md:min-h-[800px] lg:min-h-[800px]">
        {{-- Judul --}}
        <div class="mb-8 mt-10 px-6 text-center sm:mb-12">
            <h2 class="text-2xl font-bold sm:text-3xl">
                BERITA TERBARU SEPUTAR YAYASAN HAADII NURUL IKHLAS
            </h2>
        </div>

        {{-- Berita --}}
        <div class="flex flex-wrap justify-center gap-8 px-4 sm:px-6 lg:gap-12">
            <!-- Card 1 -->

            @foreach ($berita as $data)
                <div
                    class="mb-8 max-w-sm rounded-lg border border-gray-200 bg-white shadow-sm transition-transform duration-300 hover:scale-105">
                    <a href="{{ route('berita.detail', $data->id_berita) }}">
                        <div class="w-full flex justify-center">
                            <img class="w-5/12 " src="{{ Storage::url($data->slug) }}" alt="Berita 1" />
                        </div>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                {{ $data->judul }}
                            </h5>
                            <div class="mb-3 text-gray-700">
                                {{ Str::words(strip_tags($data->content), 20) }}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>


    <!-- Section Donasi -->
    <section class="bg-white py-16">
        <div class="mx-auto max-w-6xl px-4 text-center">
            <h2 class="mb-10 text-3xl font-bold text-[#3B9B3C] sm:text-4xl">
                <span class="text-[#FDC261]">YAYASAN HAADII NURUL IKHLAS</span> <br> MENERIMA DONASI DALAM BENTUK
            </h2>

            <!-- Grid Program -->
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">

                <!-- Card 1 -->
                @php $count = 1; @endphp
                @foreach ($jenisDonasi as $data)
                    <!-- Card -->
                    <div
                        class="transform rounded-2xl border border-[#FDC261] bg-[#FDC261]/20 p-6 shadow-lg transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
                        <div
                            class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-[#FDC261] text-2xl font-bold text-white shadow-md">
                            {{ $count }}
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-[#3B9B3C]">{{ $data->jenis }}</h3>
                        <div class="text-sm text-gray-600">
                            {{ Str::words(strip_tags($data->description), 20) }}
                        </div>
                    </div>
                    @php $count++; @endphp
                @endforeach
            </div>
    </section>


    <!-- Section Dokumentasi -->
    <section class="bg-[#3B9B3C] py-16 text-white">
        <div class="mx-auto max-w-6xl px-6">

            <!-- Judul Utama -->
            <div class="mb-12">
                <h1 class="mb-2 text-3xl font-bold md:text-4xl">Dokumentasi Kegiatan</h1>
                <div class="h-1 w-24 rounded-full bg-[#FDC261]"></div>
                <p class="mt-4 max-w-2xl text-sm text-white/80 md:text-base">
                    Berikut adalah beberapa dokumentasi kegiatan yang telah dilaksanakan oleh Yayasan Haadii Nurul
                    Ikhlas dalam bentuk galeri foto dan video.
                </p>
            </div>

            <!-- Galeri Foto -->
            <div class="mb-16">
                <h2 class="mb-6 text-2xl font-semibold text-[#FDC261]">Galeri Foto</h2>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
                    @foreach ($foto as $data)
                        <img class="h-48 w-full rounded-lg object-cover shadow-md transition-transform duration-300 hover:scale-105"
                            src="{{ Storage::url($data->galeri_url) }}" alt="{{ $data->galeri_url }}">
                    @endforeach
                </div>
            </div>

            <!-- Video Kegiatan -->
            <div class="px-4 py-16 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-7xl">
                    <!-- Header -->
                    <div class="mb-12 text-center">
                        <h2 class="mb-4 text-3xl font-bold text-white md:text-4xl">
                            Dokumentasi Video
                        </h2>
                    </div>

                    <div class="mt-10 columns-1 gap-6 space-y-6 sm:columns-2 lg:columns-3 xl:columns-3">
                        @if (!empty($video))
                            @foreach ($video as $data)
                                @if ($data->jenis === 'video')
                                    <div class="group relative mb-6 break-inside-avoid overflow-hidden rounded-xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                                        data-embed-type="link">
                                        <div class="relative w-full overflow-hidden">
                                            <div class="group relative">
                                                <video controls
                                                    class="h-auto w-full rounded-t-xl bg-black object-contain transition-transform duration-300 group-hover:scale-105"
                                                    title="Video Kegiatan Yayasan" preload="metadata">
                                                    <source src="{{ Storage::url($data->galeri_url) }}"
                                                        type="video/mp4">
                                                    Browser Anda tidak mendukung tag video.
                                                </video>
                                            </div>
                                        </div>
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

        </div>
    </section>

</main>
