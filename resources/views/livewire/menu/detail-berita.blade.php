<body class="bg-gray-50 font-sans text-gray-800">

    <div class="flex-grow px-6 pb-20 pt-32 md:px-20 lg:px-32">

        <!-- Breadcrumb -->
        <nav class="mb-10 flex rounded-lg border border-gray-300 bg-white px-5 py-3 text-black shadow-sm"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">

                <!-- Item 1: Home -->
                <li class="inline-flex items-center">
                    <a href="/"
                        class="group inline-flex items-center text-sm font-medium text-black hover:text-green-500">
                        <svg class="me-2.5 h-3 w-3 text-black group-hover:text-green-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>

                <!-- Item 2: Publikasi -->
                <li>
                    <div class="flex items-center">
                        <svg class="mx-1 h-3 w-3 text-black rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="/publikasi"
                            class="ms-1 text-sm font-medium text-black hover:text-green-500 md:ms-2">Publikasi</a>
                    </div>
                </li>

                <!-- Item 3: Berita -->
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="mx-1 h-3 w-3 text-black rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-black">Berita</span>
                    </div>
                </li>

            </ol>
        </nav>

        <div class="">

            <!-- Judul Berita -->
            <h1 class="mb-4 text-3xl font-bold text-gray-500 md:text-4xl">
                {{ $berita?->judul }}
            </h1>

            <!-- Tanggal & Penulis -->
            <div class="mb-6 text-sm text-gray-500">
                Dipublikasikan pada <span class="font-medium">{{ $berita?->created_at->format('d F Y') }}</span> oleh
                <span class="font-medium">{{ $berita->users->name }}</span>
            </div>

            <!-- Gambar -->
            <div class="flex justify-center">
                <img src="{{ Storage::url($berita?->slug) }}" alt="{{ $berita?->slug }}"
                    class="mb-6 w-4/12 object-cover shadow" />
            </div>

            <!-- Isi Berita -->
            <div
                class="prose prose-p:leading-relaxed prose-img:rounded-xl prose-h2:mt-6 prose-h2:mb-2 prose-h2:text-x max-w-none">
                <div class="richeditor-content text-justify">
                    {!! $berita?->content !!}
                </div>
            </div>

            <div class="mt-4 flex flex-wrap gap-4">
                @foreach ($berita?->gambarberitas as $gambarberita)
                    <div class="w-1/3">
                        <div class="group relative">
                            <img src="{{ Storage::url($gambarberita->gambar_url) }}"
                                alt="{{ $gambarberita->gambar_url }}" class="w-full rounded-xl object-cover shadow" />
                            <div
                                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity group-hover:opacity-100">
                                <p class="px-2 text-center text-sm text-white">{{ $gambarberita->caption }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tombol Kembali -->
            <div class="mt-10">
                <a href="/publikasi"
                    class="inline-block transform rounded-lg bg-blue-600 px-6 py-3 text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700">
                    ← Kembali ke Daftar Berita
                </a>
            </div>
        </div>
    </div>

</body>
