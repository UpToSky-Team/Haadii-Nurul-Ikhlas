<body class="bg-gray-100 text-gray-800 mt-20 pt-20 ">
    <div class="flex-grow pb-20 px-6 md:px-20 lg:px-32 pt-32">
      <!-- Breadcrumb -->
      <nav class="flex px-4 py-2 rounded-md bg-white shadow-sm border border-gray-200 mb-6" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse text-sm text-gray-500">

        <!-- Home -->
        <li class="inline-flex items-center">
          <a href="/" class="group inline-flex items-center font-medium text-gray-600 hover:text-green-600 transition duration-300">
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
            <a href="#" class="ms-1 font-medium text-gray-600 hover:text-green-600 md:ms-2 transition duration-300">Profile</a>
          </div>
        </li>

        <!-- Divider + Sejarah -->
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-3 h-3 mx-1 text-gray-300" fill="none" stroke="currentColor"
                 viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="ms-1 font-medium text-gray-800 md:ms-2">Visi Misi</span>
          </div>
        </li>

      </ol>
    </nav>

    <!-- Konten -->
    <div class="pt-6">
      <div class="bg-white p-8 rounded-lg shadow-lg animate-fade-in-up">
        <div class="flex flex-col items-center">
          @if (!empty($visiMisi->gambar_url))
          <figure class="w-full max-w-3xl mx-auto mb-6">
            <img class="rounded-lg w-full shadow-sm" src="{{ Storage::url($visiMisi->gambar_url) }}" alt="image description">
          </figure>
          @endif
        </div>

        <!-- Judul -->
        <h1 class="text-3xl font-bold text-center text-orange-600 mb-6 text-start animate-fade-in-up delay-100">
          Visi & Misi Yayasan Haadi Nurul Ikhlas
        </h1>

                <!-- Visi -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-start">Visi</h2>
                    <div class="text-justify leading-relaxed richeditor-content bg-orange-100 p-4 rounded-lg value-db">
                        {!! $visiMisi->visi !!}
                    </div>
                </div>

                <!-- Misi -->
                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-start">Misi</h2>
                    <div class="text-justify bg-gray-50 p-6 rounded-lg richeditor-content shadow-sm value-db">
                        {!! $visiMisi->misi !!}
                    </div>
                </div>

                <!-- Ajakan -->
                <p class="text-center text-lg font-semibold text-gray-800 mt-6 text-start">
                    Bersama kita wujudkan perubahan nyata untuk masyarakat yang lebih baik!
                </p>
            </div>
        </div>

  </div>
</body>
</html>
