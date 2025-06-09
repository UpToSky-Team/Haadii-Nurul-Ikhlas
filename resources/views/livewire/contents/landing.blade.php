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
                <p class="mb-6 text-sm leading-relaxed text-white sm:text-base">
                    Yayasan Haadii Nurul Ikhlas Merupakan Yayasan Panti Asuhan Muhammadiyah
                </p>

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
                        <img class="rounded-t-lg" src="{{ Storage::url($data->slug) }}" alt="Berita 1" />
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

                    <!-- Video Grid -->
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        @if (!empty($video))
                            @foreach ($video as $data)
                                @if ($data->jenis === 'video')
                                    <div class="group relative">
                                        <!-- Video Card -->
                                        <div
                                            class="relative overflow-hidden rounded-2xl border border-slate-700/50 bg-gradient-to-br from-slate-800 to-slate-900 shadow-xl transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl">
                                            <a href="{{ Storage::url($data->galeri_url) }}" data-lightbox="galeri"
                                                class="block">
                                                <div class="relative aspect-video overflow-hidden">
                                                    <!-- Video Element -->
                                                    <video controls
                                                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110"
                                                        title="Video Kegiatan Yayasan" preload="metadata"
                                                        controlsList="nodownload">
                                                        <source src="{{ Storage::url($data->galeri_url) }}"
                                                            type="video/mp4">
                                                        Browser Anda tidak mendukung tag video.
                                                    </video>

                                                    <!-- Overlay Gradient -->
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                                    </div>

                                                    <!-- Play Icon Overlay -->
                                                    <div
                                                        class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                                        <div
                                                            class="flex h-16 w-16 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                                                            <svg class="ml-1 h-8 w-8 text-white" fill="currentColor"
                                                                viewBox="0 0 20 20">
                                                                <path
                                                                    d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif

                                @if ($data->jenis === 'link')
                                    <div class="group relative">
                                        <!-- YouTube/Link Card -->
                                        <div
                                            class="relative overflow-hidden rounded-2xl border border-slate-700/50 bg-gradient-to-br from-red-900/20 to-slate-900 shadow-xl transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl">
                                            <div class="relative aspect-video overflow-hidden">
                                                <!-- YouTube Embed Container -->
                                                <div class="absolute inset-0 h-full w-full">
                                                    <div
                                                        class="h-full w-full [&>iframe]:h-full [&>iframe]:w-full [&>iframe]:rounded-t-2xl [&>iframe]:border-0">
                                                        {!! $data->galeri_url !!}
                                                    </div>
                                                </div>

                                                <!-- Hover Overlay -->
                                                <div
                                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-slate-900/40 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <!-- Empty State -->
                            <div class="col-span-full py-16 text-center">
                                <div class="mx-auto mb-6 h-24 w-24 text-gray-600">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        class="h-full w-full">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="mb-2 text-xl font-semibold text-gray-400">Belum Ada Video</h3>
                                <p class="text-gray-500">Video dokumentasi akan ditampilkan di sini</p>
                            </div>
                        @endif
                    </div>

                    <!-- Bottom Decoration -->
                    <div class="mt-16 text-center">
                        <div class="inline-flex items-center gap-2 text-gray-400">
                            <div class="h-px w-8 bg-gradient-to-r from-transparent to-gray-600"></div>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="h-px w-8 bg-gradient-to-l from-transparent to-gray-600"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
