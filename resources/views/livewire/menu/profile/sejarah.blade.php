<body class="bg-gray-50 text-gray-800 font-sans min-h-screen flex flex-col">

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
              <span class="ms-1 font-medium text-gray-800 md:ms-2">Sejarah</span>
            </div>
          </li>

        </ol>
      </nav>

      <!-- Konten Sejarah -->
      <section class="bg-white p-6 md:p-10 rounded-xl shadow-md text-justify">
        <div class="flex flex-col items-center">
          @if (!empty($sejarah->gambar_url))
          <figure class="w-full max-w-3xl mx-auto mb-6">
            <img class="rounded-lg w-full shadow-sm" src="{{ Storage::url($sejarah->gambar_url) }}" alt="image description">
          </figure>
          @endif
        </div>

        <h1 class="text-3xl font-semibold text-left text-orange-500 mb-6">
          Sejarah Berdirinya Yayasan Haadii Nurul Ikhlas
        </h1>

        <div class="text-gray-700 leading-relaxed richeditor-content value-db">
          {!! $sejarah->konten !!}
        </div>
      </section>

    </div>
  </body>
