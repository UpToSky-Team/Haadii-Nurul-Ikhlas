<main class="">
<!-- Section Selamat Datang -->
<section class="relative p-6 sm:p-10 text-white w-full min-h-[500px] sm:min-h-[600px] lg:min-h-[700px]
rounded-bl-none flex flex-col sm:flex-row items-center justify-center gap-16 sm:gap-20 lg:gap-64 overflow-hidden pt-[80px] sm:pt-[100px] "
style="background-image: url('/img/section-bg.svg'); background-size: cover; background-position: center;">

<div class="bg-white/10 backdrop-blur-md h-[280px] w-full sm:w-[80%] mx-auto rounded-tl-[20px] rounded-br-[20px] flex items-center justify-between px-6 sm:px-12 border border-white/30 shadow-lg">
    <!-- Teks -->
    <div class="relative z-10 max-w-xl text-center sm:text-left">
        <p class="text-[36px] font-bold mb-2 leading-tight text-black text-shadow">
            SELAMAT DATANG DI YAYASAN
        </p>
        <h3 class="text-2xl sm:text-3xl font-bold mb-4 text-black">
            HAADII NURUL IKHLAS
        </h3>
        <p class="text-black mb-6 leading-relaxed text-sm sm:text-base">
            Yayasan Haadii Nurul Ikhlas Merupakan Yayasan Panti Asuhan Muhammadiyah
        </p>

        <!-- Sosial Media & CTA -->
        <div class="flex items-center gap-4 justify-center sm:justify-start flex-wrap">
            <a href="https://www.instagram.com/yayasanhaadiinurulikhlas/" class="bg-pink-600 p-2 rounded-full transition-transform duration-300 hover:scale-110 shadow-md">
                <img src="/img/icon/instagram.png" alt="Instagram" class="w-6 h-6">
            </a>
            <a href="#" class="bg-black p-2 rounded-full transition-transform duration-300 hover:scale-110 shadow-md">
                <img src="/img/icon/tiktok.png" alt="TikTok" class="w-6 h-6">
            </a>
            <a href="https://www.youtube.com/@YayasanHaadiiNurulIkhlas" class="bg-red-600 p-2 rounded-full transition-transform duration-300 hover:scale-110 shadow-md">
                <img src="/img/icon/youtube.png" alt="YouTube" class="w-6 h-6">
            </a>
            <a href="https://x.com/YayasanHNI" class="bg-white p-2 rounded-full transition-transform duration-300 hover:scale-110 shadow-md">
                <img src="/img/icon/twitter.png" alt="twitter" class="w-6 h-6">
            </a>
            <a href="https://www.facebook.com/profile.php?id=61572579006943" class="bg-blue-600 p-2 rounded-full transition-transform duration-300 hover:scale-110 shadow-md">
                <img src="/img/icon/facebook.png" alt="facebook" class="w-6 h-6">
            </a>
            <a href="#" class="bg-white text-black py-2 px-5 sm:px-6 rounded-lg font-semibold transition-transform duration-300 hover:scale-105 shadow-md hover:bg-gray-200">
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


<!-- Carousel wrapper -->
<section>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden  md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/fotopertama.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/fotokedua.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/fotoketiga.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</section>

    <!-- Section Program -->
        <section class="relative mx-auto pt-10 min-h-[300px] sm:min-h-[500px] md:min-h-[500px] lg:min-h-[500px]">
            <!-- Judul -->
            <div class="text-center ">
                <h2 class="text-2xl font-bold lg:text-3xl">
                    PROGRAM UNGGULAN <span class="text-green-600">YAYASAN HAADII NURUL IKHLAS</span>
                </h2>
            </div>

            <!-- Grid Program -->
            <div class="flex flex-wrap justify-center gap-8 md:gap-8 lg:gap-12 mt-10">
                <!-- Card 1 -->
                <div class="w-full max-w-[250px] lg:max-w-[280px] min-h-72 bg-orange-500 p-6 rounded-lg shadow-md
                            rounded-tl-none rounded-tr-[28px] rounded-bl-[28px] rounded-br-none
                            transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <h3 class="text-xl font-semibold text-white mb-3">Program 1</h3>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <!-- Card 2 -->
                <div class="w-full max-w-[250px] lg:max-w-[280px] min-h-72 bg-orange-500 p-6 rounded-lg shadow-md
                            rounded-tl-none rounded-tr-[28px] rounded-bl-[28px] rounded-br-none
                            transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <h3 class="text-xl font-semibold text-white mb-3">Program 2</h3>
                    <p class="text-white">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <!-- Card 3 -->
                <div class="w-full max-w-[250px] lg:max-w-[280px] min-h-72 bg-orange-500 p-6 rounded-lg shadow-md
                            rounded-tl-[28px] rounded-tr-none rounded-bl-none rounded-br-[28px]
                            transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <h3 class="text-xl font-semibold text-white mb-3">Program 3</h3>
                    <p class="text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                </div>
            </div>
        </section>
    {{-- Section Berita --}}
        <section class="relative bg-green-600 text-white min-h-[300px] sm:min-h-[500px] md:min-h-[800px] lg:min-h-[800px] rounded-bt-none rounded-bl-none rounded-tr-[200px] rounded-br-none">

            {{-- Judul --}}
            <div class="text-center mb-10 mt-10 px-6 py-12">
                <h2 class="text-2xl font-bold">
                    BERITA TERBARU SEPUTAR YAYASAN HAADII NURUL IKHLAS
                </h2>
            </div>
            {{-- Berita --}}
            <div class="flex flex-wrap justify-center gap-8 lg:gap-12">
                <!-- Card 1 -->
                @if (!empty($berita))
                    @foreach (@$berita as $data)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition-transform duration-300 hover:scale-105">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ Storage::url($data->slug ) }}" alt="Tech News Image 1" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {!! Str::words($data->judul, 4, '...') !!}
                                </h5>
                            </a>
                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {!!  Str::words($data->content, 10, '...') !!}
                            </div>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @endif
                <!-- Card 2 -->
                {{-- <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition-transform duration-300 hover:scale-105">
                    <a href="#">
                        <img class="rounded-t-lg" src="/img/content/dummy1.png" alt="Tech News Image 2" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Noteworthy technology acquisitions 2021
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                        </p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition-transform duration-300 hover:scale-105">
                    <a href="#">
                        <img class="rounded-t-lg" src="/img/content/dummy1.png" alt="Tech News Image 3" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Noteworthy technology acquisitions 2021
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                        </p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div> --}}
            </div>
        </section>
    <!-- Section Donasi -->
        <section class="relative mx-auto pt-10 min-h-[300px] sm:min-h-[500px] md:min-h-[500px] lg:min-h-[500px]">
                <!-- Judul -->
                <div class="text-center ">
                    <h2 class="text-2xl font-bold lg:text-3xl">
                        PROGRAM DONASI <span class="text-green-600">YAYASAN HAADII NURUL IKHLAS</span>
                    </h2>
                </div>

                <!-- Grid Program -->
                <div class="flex flex-wrap justify-center gap-8 md:gap-8 lg:gap-12 mt-10">
                    <!-- Card 1 -->
                    <div class="w-full max-w-[250px] lg:max-w-[280px] min-h-72 bg-orange-500 p-6 rounded-lg shadow-md
                                rounded-tl-none rounded-tr-[28px] rounded-bl-[28px] rounded-br-none
                                transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <h3 class="text-xl font-semibold text-white mb-3">DONASI UANG</h3>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="w-full max-w-[250px] lg:max-w-[280px] min-h-72 bg-orange-500 p-6 rounded-lg shadow-md
                                rounded-tl-none rounded-tr-[28px] rounded-bl-[28px] rounded-br-none
                                transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <h3 class="text-xl font-semibold text-white mb-3">DONASI PAKAIAN</h3>
                        <p class="text-white">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="w-full max-w-[250px] lg:max-w-[280px] min-h-72 bg-orange-500 p-6 rounded-lg shadow-md
                                rounded-tl-[28px] rounded-tr-none rounded-bl-none rounded-br-[28px]
                                transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <h3 class="text-xl font-semibold text-white mb-3">DONASI BARANG</h3>
                        <p class="text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
        </section>
    <!-- Section Dokumentasi -->
        <section class="relative bg-green-600 text-white min-h-[300px] sm:min-h-[500px] md:min-h-[800px] lg:min-h-[800px] rounded-bt-none rounded-bl-none rounded-tr-none rounded-br-none"">
            <div class="mx-auto px-6 py-12 max-w-6xl">
                    <!-- Judul -->
                    <h1 class="text-3xl font-bold text-center text-white mb-6">DOKUMENTASI KEGIATAN YAYASAN HAADII NURUL IKHLAS </h1>

                    <!-- Galeri Foto -->
                    <div class="mb-12">
                        <h2 class="text-2xl font-semibold text-white mb-4 text-center">Galeri Foto</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            @if (!empty($foto))
                                @foreach ($foto as $data)
                                    @if ($data->jenis == 'gambar')
                                    <img class="w-full h-48 object-cover rounded-lg shadow-md transition-transform duration-300 hover:scale-105" src="{{ Storage::url($data->galeri_url) }}" alt="Kegiatan 1">
                                    @endif
                                @endforeach
                            @endif
                            {{-- <img class="w-full h-48 object-cover rounded-lg shadow-md transition-transform duration-300 hover:scale-105" src="/img/content/dummy1.png" alt="Kegiatan 1">
                            <img class="w-full h-48 object-cover rounded-lg shadow-md transition-transform duration-300 hover:scale-105" src="/img/content/dummy1.png" alt="Kegiatan 3">
                            <img class="w-full h-48 object-cover rounded-lg shadow-md transition-transform duration-300 hover:scale-105" src="/img/content/dummy1.png" alt="Kegiatan 4">
                            <img class="w-full h-48 object-cover rounded-lg shadow-md transition-transform duration-300 hover:scale-105" src="/img/content/dummy1.png" alt="Kegiatan 5">
                            <img class="w-full h-48 object-cover rounded-lg shadow-md transition-transform duration-300 hover:scale-105" src="/img/content/dummy1.png" alt="Kegiatan 2">
                            <img class="w-full h-48 object-cover rounded-lg shadow-md transition-transform duration-300 hover:scale-105" src="/img/content/dummy1.png" alt="Kegiatan 6"> --}}
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
