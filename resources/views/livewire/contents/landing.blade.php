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

        <!-- Logo Yayasan -->
        <div class="flex justify-center sm:justify-end flex-1">
          <div class="relative z-10 w-32 h-32 sm:w-44 sm:h-44 lg:w-60 lg:h-60 flex items-center justify-center hover:scale-105 transition-transform">
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
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/banner-welcome.png" class="block w-full h-full object-cover" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/fotokedua.png" class="block w-full h-full object-cover" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/fotoketiga.png" class="block w-full h-full object-cover" alt="...">
                </div>
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
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-[#3B9B3C] mb-10">Program Unggulan Kami</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-[#FDC261]/20 border border-[#FDC261] rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transform transition duration-300 ease-in-out">
                <div class="w-16 h-16 mx-auto bg-[#FDC261] text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 shadow-md">
                    1
                </div>
                <h3 class="text-xl font-semibold text-[#3B9B3C] mb-2">Pendidikan Karakter</h3>
                <p class="text-gray-600 text-sm">
                    Membentuk pribadi anak-anak yang mandiri, jujur, dan berakhlak mulia melalui pembinaan harian.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#FDC261]/20 border border-[#FDC261] rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transform transition duration-300 ease-in-out">
                <div class="w-16 h-16 mx-auto bg-[#FDC261] text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 shadow-md">
                    2
                </div>
                <h3 class="text-xl font-semibold text-[#3B9B3C] mb-2">Pembelajaran Al-Qur'an</h3>
                <p class="text-gray-600 text-sm">
                    Program hafalan dan pemahaman Al-Qur’an untuk menumbuhkan kecintaan pada kitab suci sejak dini.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#FDC261]/20 border border-[#FDC261] rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transform transition duration-300 ease-in-out">
                <div class="w-16 h-16 mx-auto bg-[#FDC261] text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 shadow-md">
                    3
                </div>
                <h3 class="text-xl font-semibold text-[#3B9B3C] mb-2">Pelatihan Keterampilan</h3>
                <p class="text-gray-600 text-sm">
                    Mengembangkan potensi anak dalam bidang kreatif seperti desain, musik, dan keterampilan digital.
                </p>
            </div>

        </div>
    </div>
</section>


{{-- Section Berita --}}
<section class="relative bg-[#3B9B3C] text-white min-h-[300px] sm:min-h-[500px] md:min-h-[800px] lg:min-h-[800px] rounded-b-none rounded-bl-none rounded-tr-none rounded-br-none py-12">
    {{-- Judul --}}
    <div class="text-center mb-8 sm:mb-12 mt-10 px-6">
        <h2 class="text-2xl sm:text-3xl font-bold">
            BERITA TERBARU SEPUTAR YAYASAN HAADII NURUL IKHLAS
        </h2>
    </div>

    {{-- Berita --}}
    <div class="flex flex-wrap justify-center gap-8 lg:gap-12 px-4 sm:px-6">
        <!-- Card 1 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm transition-transform duration-300 hover:scale-105 mb-8">
            <a href="#">
                <img class="rounded-t-lg" src="/img/fotokedua.png" alt="Berita 1" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                        Judul Berita 1
                    </h5>
                </a>
                <div class="mb-3 text-gray-700">
                    Ringkasan konten berita 1 yang singkat dan jelas untuk menarik perhatian pembaca.
                </div>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#FDC261] rounded-lg hover:bg-[#FDC261] focus:ring-4 focus:outline-none focus:ring-[#FDC261]">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm transition-transform duration-300 hover:scale-105 mb-8">
            <a href="#">
                <img class="rounded-t-lg" src="/img/fotokedua.png" alt="Berita 2" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                        Judul Berita 2
                    </h5>
                </a>
                <div class="mb-3 text-gray-700">
                    Ringkasan konten berita 2 yang menarik untuk pembaca dan mengundang mereka untuk membaca lebih lanjut.
                </div>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#FDC261] rounded-lg hover:bg-[#FDC261] focus:ring-4 focus:outline-none focus:ring-[#FDC261]">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm transition-transform duration-300 hover:scale-105 mb-8">
            <a href="#">
                <img class="rounded-t-lg" src="/img/fotokedua.png" alt="Berita 3" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                        Judul Berita 3
                    </h5>
                </a>
                <div class="mb-3 text-gray-700">
                    Ringkasan konten berita 3 yang berisi informasi terbaru yang relevan dengan pembaca.
                </div>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#FDC261] rounded-lg hover:bg-[#FDC261] focus:ring-4 focus:outline-none focus:ring-[#FDC261]">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Section Donasi -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-[#3B9B3C] mb-10">
            PROGRAM DONASI <span class="text-[#FDC261]">YAYASAN HAADII NURUL IKHLAS</span>
        </h2>

        <!-- Grid Program -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-[#FDC261]/20 border border-[#FDC261] rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300 ease-in-out transform">
                <div class="w-16 h-16 mx-auto bg-[#FDC261] text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 shadow-md">
                    1
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
                @foreach ($kegiatanUnggulan as $data)    
                    <div class="w-full max-w-[250px] lg:max-w-[280px] bg-orange-500 p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                        <!-- Gambar -->
                        <div class="mb-4">
                            <img src="{{ Storage::url($data->gambar) }}" alt="{{ $data->judul_kegiatan }}" 
                                 class="w-full h-40 object-cover rounded-lg">
                        </div>
                        <!-- Judul -->
                        <h3 class="text-lg font-bold text-white mb-2">
                            {{ $data->judul_kegiatan }}
                        </h3>
                        <!-- Deskripsi -->
                        <div class="text-sm text-white line-clamp-3">
                            {!! Str::words($data->deskripsi, 10, '...') !!}
                        </div>
                        <!-- Tombol Selengkapnya -->
                        <a href="" 
                           class="inline-block mt-4 px-4 py-2 bg-green-600 text-white text-sm font-semibold rounded-lg shadow-md transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                            Selengkapnya
                        </a>
                    </div>
                @endforeach
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
                    @foreach ($berita as $data)
                    <a wire:click="openDetailBerita('{{$data->id_berita}}')">
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition-transform duration-300 hover:scale-105 cursor-pointer">
                            <div>
                                <img class="rounded-t-lg" src="{{ Storage::url($data->slug ) }}" alt="Tech News Image 1" />
                            </div>
                            <div class="p-5">
                                <div>
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {!! Str::words($data->judul, 4, '...') !!}
                                    </h5>
                                </div>
                                <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {!!  Str::words($data->content, 10, '...') !!}
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                @endif
            </div>
        </section>
    <!-- Section Donasi -->
        <section class="relative mx-auto pt-10 min-h-[300px] sm:min-h-[500px] md:min-h-[500px] lg:min-h-[500px] mb-10">
                <!-- Judul -->
                <div class="text-center ">
                    <h2 class="text-2xl font-bold lg:text-3xl">
                        KEGIATAN <span class="text-green-600">YAYASAN HAADII NURUL IKHLAS</span>
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
      <div class="mb-16">
        <h2 class="text-2xl font-semibold mb-6 text-[#FDC261]">Galeri Foto</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          <img class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" src="/img/content/dummy1.png" alt="Kegiatan 1">
          <img class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" src="/img/content/dummy1.png" alt="Kegiatan 2">
          <img class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" src="/img/content/dummy1.png" alt="Kegiatan 3">
          <img class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" src="/img/content/dummy1.png" alt="Kegiatan 4">
          <img class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" src="/img/content/dummy1.png" alt="Kegiatan 5">
          <img class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" src="/img/content/dummy1.png" alt="Kegiatan 6">
        </div>
      </div>

      <!-- Dokumentasi Video -->
      <div>
        <h2 class="text-2xl font-semibold mb-6 text-[#FDC261]">Dokumentasi Video</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="w-full aspect-video rounded-lg overflow-hidden shadow-md">
            <iframe class="w-full h-full"
              src="https://www.youtube.com/embed/dQw4w9WgXcQ"
              title="Video Kegiatan Yayasan 1" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
          <div class="w-full aspect-video rounded-lg overflow-hidden shadow-md">
            <iframe class="w-full h-full"
              src="https://www.youtube.com/embed/9bZkp7q19f0"
              title="Video Kegiatan Yayasan 2" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>

    </div>
  </section>


    </main>
