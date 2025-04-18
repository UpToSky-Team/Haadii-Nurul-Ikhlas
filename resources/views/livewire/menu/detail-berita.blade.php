<body class="bg-gray-50 text-gray-800 font-sans">

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

              <!-- Item 2: Publikasi -->
              <li>
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                       fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="/publikasi" class="ms-1 text-sm font-medium text-black hover:text-green-500 md:ms-2">Publikasi</a>
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
                  <span class="ms-1 text-sm font-medium text-black hover:text-green-500 md:ms-2">Berita</span>
                </div>
              </li>

            </ol>
          </nav>


        <div class="max-w-6xl mx-auto pt-[120px] px-6 sm:px-6 lg:px-8 py-10">

    <!-- Judul Berita -->
    <h1 class="text-3xl md:text-4xl font-bold mb-4">
      {{ $berita?->judul }}
    </h1>

    <!-- Tanggal & Penulis -->
    <div class="text-sm text-gray-500 mb-6">
      Dipublikasikan pada <span class="font-medium">{{ $berita?->created_at->format('d F Y') }}</span> oleh <span class="font-medium">{{ $berita->users->name }}</span>
    </div>

    <!-- Gambar -->
    <img src="{{ Storage::url($berita?->slug)}}" alt="{{$berita?->slug}}" class="rounded-xl shadow mb-6 w-full object-cover" />
    
    <!-- Isi Berita -->
    <div class="prose max-w-none prose-p:leading-relaxed prose-img:rounded-xl prose-h2:mt-6 prose-h2:mb-2 prose-h2:text-x">
      <div class="text-justify">
        {!! $berita?->content !!}
      </div>
    </div>
    
    <div class="flex gap-4 flex-wrap mt-4">
      @foreach ($berita?->gambarberitas as $gambarberita)
      <div class="w-1/3">
        <div class="relative group">
          <img src="{{ Storage::url($gambarberita->gambar_url) }}" alt="{{ $gambarberita->gambar_url }}" class="rounded-xl shadow object-cover w-full" />
          <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
          <p class="text-white text-sm px-2 text-center">{{ $gambarberita->caption }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

          <!-- Tombol Kembali -->
          <div class="mt-10">
            <a href="/publikasi" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
              ← Kembali ke Daftar Berita
            </a>
          </div>
        </div>
      </body>
    </div>
</html>
