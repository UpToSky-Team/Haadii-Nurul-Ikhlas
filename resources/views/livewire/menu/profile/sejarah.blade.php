<body class="bg-gray-100 text-gray-800 pt-10 font-poppins">
    <div class="container mx-auto flex flex-col items-start text-justify pb-10 pt-40">
        <div class="bg-white  p-8 rounded-lg shadow-lg text-justify">
            <div class="container mx-auto flex flex-col items-center">
                @if (!empty($sejarah->gambar_url))
                <figure class="w-full max-w-4xl mx-auto flex flex-col items-center">
                    <img class="w-full max-w-4xl h-auto rounded-lg" src="{{ Storage::url($sejarah->gambar_url) }}" alt="image description">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Bangunan Yayasan Haadii Nurul Ikhlas</figcaption>
                </figure>
                @endif
            </div>
            <h1 class="text-3xl font-bold text-start text-orange-600 mb-6">Sejarah Berdirinya Yayasan Haadi Nurul Ikhlas</h1>

            <div class="text-justify richeditor-content leading-relaxed mb-4">
                {!!$sejarah->konten !!}
            </div>

        </div>
    </div>
</body>
