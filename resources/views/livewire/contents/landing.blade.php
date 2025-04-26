<main class="font-display">
    <section
    class="relative p-6 sm:p-10 text-white w-full min-h-[500px] sm:min-h-[600px] lg:min-h-[700px]
      rounded-bl-none flex flex-col sm:flex-row items-center justify-center gap-10 sm:gap-20 lg:gap-64 overflow-hidden pt-[80px] sm:pt-[100px] bg-cover bg-center"
    style="background-image: url('/img/bg-jumbotron-update.png');">


      <div class="bg-white/10 backdrop-blur-md w-full max-w-screen-lg mx-auto rounded-tl-[20px] rounded-br-[20px] flex flex-col sm:flex-row items-center justify-between gap-8 sm:gap-12 px-6 sm:px-12 py-8 sm:pt-20 border border-white/30 shadow-lg">

        <!-- Teks -->
        <div class="relative z-10 text-center sm:text-left flex-1">
          <p class="text-2xl sm:text-3xl font-bold mb-2 leading-tight text-white drop-shadow-sm">
            SELAMAT DATANG DI YAYASAN
          </p>
          <h3 class="text-xl sm:text-2xl font-bold mb-4 text-white">
            HAADII NURUL IKHLAS
          </h3>
          <p class="text-white mb-6 leading-relaxed text-sm sm:text-base">
            Yayasan Haadii Nurul Ikhlas Merupakan Yayasan Panti Asuhan Muhammadiyah
          </p>

          <!-- Sosial Media & CTA -->
          <div class="flex items-center justify-center sm:justify-start flex-wrap gap-3 sm:gap-4">
            <a href="https://www.instagram.com/yayasanhaadiinurulikhlas/" class="bg-pink-600 p-2 rounded-full hover:scale-110 transition-transform shadow-md">
              <img src="/img/icon/instagram.png" alt="Instagram" class="w-6 h-6">
            </a>
            <a href="#" class="bg-black p-2 rounded-full hover:scale-110 transition-transform shadow-md">
              <img src="/img/icon/tiktok.png" alt="TikTok" class="w-6 h-6">
            </a>
            <a href="https://www.youtube.com/@YayasanHaadiiNurulIkhlas" class="bg-red-600 p-2 rounded-full hover:scale-110 transition-transform shadow-md">
              <img src="/img/icon/youtube.png" alt="YouTube" class="w-6 h-6">
            </a>
            <a href="https://x.com/YayasanHNI" class="bg-white p-2 rounded-full hover:scale-110 transition-transform shadow-md">
              <img src="/img/icon/twitter.png" alt="twitter" class="w-6 h-6">
            </a>
            <a href="https://www.facebook.com/profile.php?id=61572579006943" class="bg-blue-600 p-2 rounded-full hover:scale-110 transition-transform shadow-md">
              <img src="/img/icon/facebook.png" alt="facebook" class="w-6 h-6">
            </a>
            <a href="#" class="bg-white text-black py-2 px-4 sm:px-6 rounded-lg font-semibold hover:scale-105 transition-transform shadow-md hover:bg-gray-200">
              Hubungi Kami
            </a>
          </div>
        </div>

    <!-- Logo Yayasan (Hilang di Mobile) -->
    <div class="hidden sm:flex">
        <div class="relative z-10 flex w-44 h-44 sm:w-60 sm:h-60 items-center justify-center transition-transform duration-300 hover:scale-105">
            <div class="absolute w-full h-full bg-white rounded-full shadow-md"></div>
            <img src="/img/logoyayasan.png" alt="Logo Yayasan" class="relative w-[85%] h-[85%] object-contain">
        </div>
    </div>
</div>

    </section>

    <section>
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative aspect-[16/6] sm:aspect-[16/9] md:aspect-[16/6] lg:aspect-[16/5] overflow-hidden">
                <!-- Item 1 -->
                @foreach ($banner as $data)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{Storage::url($data->banner)}}" class="block w-full h-full object-cover" alt="...">
                </div>
                @endforeach
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>

            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
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
                DONASI <span class="text-[#FDC261]">YAYASAN HAADII NURUL IKHLAS</span>
            </h2>

            <!-- Grid Program -->
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">

                <!-- Card 1 -->
                <div class="mx-auto max-w-6xl px-4 text-center">
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
                    <div>
                        <h2 class="text-2xl font-semibold text-white mb-4 text-center">Dokumentasi Video</h2>
                        <div class="flex flex-col items-center space-y-6">
                            @if (!empty($video))
                                @foreach ($video as $data)
                                    @if ($data->jenis == 'video')
                                    <iframe class="w-full md:w-2/3 h-64 md:h-96 rounded-lg shadow-md"
                                        src="{{ Storage::url($data->galeri_url) }}"
                                        title="Video Kegiatan Yayasan" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                    @endif
                                @endforeach
                            @endif

                            {{-- <iframe class="w-full md:w-2/3 h-64 md:h-96 rounded-lg shadow-md"
                                src="https://www.youtube.com/embed/your-video-link-here"
                                title="Video Kegiatan Yayasan 2" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe> --}}
                        </div>
                    </div>

            </div>
        </section>

    </main>
