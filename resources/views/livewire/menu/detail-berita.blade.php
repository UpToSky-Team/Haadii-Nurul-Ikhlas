<body class="bg-gray-50 text-gray-800 font-sans">
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
    
    <div class="flex gap-4 flex-wrap">
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
</html>
