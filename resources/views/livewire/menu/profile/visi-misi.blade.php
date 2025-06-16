<body class="mt-20 bg-gray-100 pt-20 text-gray-800">
    <div class="flex-grow px-6 pb-20 pt-32 md:px-20 lg:px-32">
        <!-- Breadcrumb -->
        <nav class="mb-6 flex rounded-md border border-gray-200 bg-white px-4 py-2 shadow-sm" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 text-sm text-gray-500 md:space-x-2 rtl:space-x-reverse">

                <!-- Home -->
                <li class="inline-flex items-center">
                    <a href="/"
                        class="group inline-flex items-center font-medium text-gray-600 transition duration-300 hover:text-green-600">
                        <svg class="me-2 h-4 w-4 text-gray-400 group-hover:text-green-600" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1
                       1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>

                <!-- Divider + Profile -->
                <li>
                    <div class="flex items-center">
                        <svg class="mx-1 h-3 w-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 6 10"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#"
                            class="ms-1 font-medium text-gray-600 transition duration-300 hover:text-green-600 md:ms-2">Profile</a>
                    </div>
                </li>

                <!-- Divider + Sejarah -->
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="mx-1 h-3 w-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 6 10"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 font-medium text-gray-800 md:ms-2">Visi Misi</span>
                    </div>
                </li>

            </ol>
        </nav>

        <!-- Konten -->
        <div class="pt-6">
            <div class="animate-fade-in-up rounded-lg bg-white p-8 shadow-lg">
                <div class="flex flex-col items-center">
                    @if (!empty($visiMisi->gambar_url))
                        <div class="flex justify-center mx-auto mb-6 w-full max-w-3xl">
                            <img class="w-4/12 rounded-lg shadow-sm" src="{{ Storage::url($visiMisi->gambar_url) }}"
                                alt="image description">
                        </div>
                    @endif
                </div>

                <!-- Judul -->
                <h1 class="animate-fade-in-up mb-6 text-start text-3xl font-bold text-orange-600 delay-100">
                    Visi & Misi Yayasan Haadii Nurul Ikhlas
                </h1>

                <!-- Visi -->
                <div class="mb-8">
                    <h2 class="mb-3 text-start text-2xl font-semibold text-gray-700">Visi</h2>
                    <div class="richeditor-content richeditor-content rounded-lg bg-orange-100 p-4 text-justify leading-relaxed">
                        {!! $visiMisi->visi !!}
                    </div>
                </div>

                <!-- Misi -->
                <div>
                    <h2 class="mb-3 text-start text-2xl font-semibold text-gray-700">Misi</h2>
                    <div class="richeditor-content richeditor-content rounded-lg bg-gray-50 p-6 text-justify shadow-sm">
                        {!! $visiMisi->misi !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
