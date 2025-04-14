<body class="bg-gray-100 text-gray-800 mt-20 " >
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

              <!-- Item 3: Struktur Yayasan -->
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                       fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ms-1 text-sm font-medium text-black hover:text-green-500 md:ms-2">Struktur Yayasan</span>
                </div>
              </li>

            </ol>
          </nav>

        <div class="container mx-auto max-w-5xl">
            @foreach ($struktur as $data)
                <div class="max-w-4xl mx-auto bg-white p-6 shadow-lg rounded-lg mt-10 border-t-4 border-yellow-400">
                    <div class="flex items-center space-x-6">
                        <img src="{{ empty($data->gambar_url) ? '/img/profile_picture/profile.jpg' : Storage::url($data->gambar_url) }}" alt="{{ $data->nama }}" class="w-32 h-32 rounded-full border-4 border-gray-300">
                        <div>
                            <h2 class="text-lg font-bold text-blue-700">{{ Str::upper($data->jabatan) }}</h2>
                            <h1 class="text-2xl font-extrabold">{{ Str::title($data->nama) }}</h1>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
