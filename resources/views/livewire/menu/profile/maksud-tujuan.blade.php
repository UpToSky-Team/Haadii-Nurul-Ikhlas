
<!-- Breadcrumb -->


<body class="bg-gray-100 text-gray-800 mt-20">
    <div class="container mx-auto px-6 py-12 max-w-4xl pt-40">
        <nav class="flex px-5 py-3 border border-black/30 rounded-lg bg-white text-black" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">

              <!-- Item 1: Home -->
              <li class="inline-flex items-center">
                <a href="/" class="group inline-flex items-center text-sm font-medium text-black hover:text-green-500">
                  <svg class="w-3 h-3 me-2.5 text-black group-hover:text-green-500" aria-hidden="true"
                       xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Home
                </a>
              </li>

              <!-- Item 2: Profile -->
              <li>
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                       fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="#" class="ms-1 text-sm font-medium text-black hover:text-green-500 md:ms-2">Profile</a>
                </div>
              </li>

              <!-- Item 3: Maksud dan Tujuan -->
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                       fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ms-1 text-sm font-medium text-black hover:text-green-500 md:ms-2">Maksud dan Tujuan</span>
                </div>
              </li>

            </ol>
          </nav>




      <!-- Konten Utama -->
      <div class="bg-white p-8 rounded-lg shadow-lg">

        <!-- Judul -->
        <h1 class="text-3xl font-bold text-center text-orange-600 mb-6">
          Maksud & Tujuan Yayasan Haadi Nurul Ikhlas
        </h1>

        <!-- Maksud -->
        <div class="mb-8">
          <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-center">Maksud</h2>
          <div class="text-justify leading-relaxed bg-orange-100 p-4 rounded-lg richeditor-content value-db">
            {!! $maksudTujuan->maksud !!}
          </div>
        </div>

        <!-- Tujuan -->
        <div>
          <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-center">Tujuan</h2>
          <div class="bg-gray-50 p-6 rounded-lg shadow-sm richeditor-content value-db">
            {!! $maksudTujuan->tujuan !!}
          </div>
        </div>

        <!-- Ajakan -->
        <p class="text-center text-lg font-semibold text-gray-800 mt-6">
          Mari bersama-sama membangun masa depan yang lebih baik dengan berbagi dan peduli kepada sesama!
        </p>

      </div>
    </div>
  </body>
