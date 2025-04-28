<body class="bg-gray-100 text-gray-800 mt-20">
    <div class="flex-grow pb-20 px-6 md:px-20 lg:px-32 pt-32">

      <!-- Breadcrumb -->
      <nav class="flex px-4 py-2 rounded-md bg-white shadow-sm border border-gray-200 mb-6" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse text-sm text-gray-500">

          <!-- Home -->
          <li class="inline-flex items-center">
            <a href="/" class="group inline-flex items-center font-medium text-gray-600 hover:text-green-600">
              <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-green-600" fill="currentColor"
                   viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1
                         1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
              Home
            </a>
          </li>

          <!-- Divider + Profile -->
          <li>
            <div class="flex items-center">
              <svg class="w-3 h-3 mx-1 text-gray-300" fill="none" stroke="currentColor"
                   viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
              </svg>
              <a href="#" class="ms-1 font-medium text-gray-600 hover:text-green-600 md:ms-2">Profile</a>
            </div>
          </li>

          <!-- Divider + Sejarah -->
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="w-3 h-3 mx-1 text-gray-300" fill="none" stroke="currentColor"
                   viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
              </svg>
              <span class="ms-1 font-medium text-gray-800 md:ms-2">Maksud dan Tujuan</span>
            </div>
          </li>

        </ol>
      </nav>

        <!-- Konten Utama -->
        <div class="bg-white pt-16 px-6 md:px-12 lg:px-20 rounded-xl shadow-lg ">
          <div class="flex flex-col items-center">
            @if (!empty($maksudTujuan->gambar_url))
            <figure class="w-full max-w-3xl mx-auto mb-6">
              <img class="rounded-lg w-full shadow-sm" src="{{ Storage::url($maksudTujuan->gambar_url) }}" alt="image description">
            </figure>
            @endif
          </div>

            <!-- Judul -->
            <h1 class="text-3xl font-bold text-[#3B9B3C] mb-10">
            Maksud & Tujuan Yayasan Haadi Nurul Ikhlas
            </h1>

            <!-- Maksud -->
            <div class="mb-12">
            <h2 class="text-2xl font-semibold text-[#3B9B3C] mb-4">Maksud</h2>
            <div class="text-justify leading-relaxed bg-[#FDC261]/30 text-gray-800 p-6 rounded-lg border border-[#FDC261] richeditor-content value-db">
                {!! $maksudTujuan->maksud !!}
            </div>
            </div>

            <!-- Tujuan -->
            <div class="mb-12">
            <h2 class="text-2xl font-semibold text-[#3B9B3C] mb-4">Tujuan</h2>
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200 richeditor-content value-db">
                {!! $maksudTujuan->tujuan !!}
            </div>
            </div>

            <!-- Ajakan -->
            <div class="pb-10">
            <p class="text-lg font-semibold text-gray-800">
                Mari bersama-sama membangun masa depan yang lebih baik dengan berbagi dan peduli kepada sesama!
            </p>
            </div>

        </div>


    </div>
  </body>
